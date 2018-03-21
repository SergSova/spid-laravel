<?php

namespace App\Http\Controllers\Admin;

use App\FaqAnswer;
use App\Http\Requests\StaticPageRequest;
use App\StaticPage;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller {
	protected $prefix = 'admin.static.';

	public function index() {
		$models = StaticPage::orderBy( 'page_index' )->get();
		$title  = 'Статические страницы';

		return view( $this->prefix . 'index' )->with( compact( 'models', 'title' ) );
	}

	/**
	 * @param StaticPageRequest $request
	 * @param  StaticPage $model
	 * @param                   $name
	 *
	 * @return $this
	 */
	public function edit( StaticPageRequest $request, $model, $name ) {
		if ( $request->isMethod( 'post' ) && $model->fill( $request->all() )->save() ) {

			switch ( $name ) {
				case 'faq':
					foreach ( $request->only( 'Question' ) as $question ) {
						foreach ( $question as $q_el ) {
							if ( ! empty( $q_el['id'] ) ) {
								/** @var FaqAnswer $answer */
								$answer = FaqAnswer::find( $q_el['id'] );
								$answer->fill( $q_el );
							} else {
								$answer = new FaqAnswer( $q_el );
							}
							$answer->save();
						}
					}
					break;
				case 'aids':
					$model->description = json_encode(
						[
							'modal_text'   => $_POST['modal_text'],
							'modal_btn'    => $_POST['modal_btn'],
							'modal_bottom' => $_POST['modal_bottom'],
						]
					);
					break;
				case 'slide-bubles':
					$model->description = json_encode(
						[
							'modal_text' => $_POST['modal_text'],
							'modal_btn'  => $_POST['modal_btn'],
							'wrong'      => $_POST['wrong'],
						]
					);
					break;
				case 'slide-rocket':
					$model->description = json_encode(
						[
							'modal_text'  => $_POST['modal_text'],
							'modal_btn'   => $_POST['modal_btn'],
							'text_bottom' => $_POST['text_bottom'],
							'wrong'       => $_POST['wrong'],
						]
					);
					break;
				case 'with-who':
					$model->description = json_encode(
						[
							'modal_text' => $_POST['modal_text'],
							'modal_btn'  => $_POST['modal_btn'],
							'pop_title'  => $_POST['pop_title'],
							'chk_1'      => $_POST['chk_1'],
							'chk_2'      => $_POST['chk_2'],
							'chk_3'      => $_POST['chk_3'],
							'chk_4'      => $_POST['chk_4'],
							'chk_5'      => $_POST['chk_5'],
							'chk_6'      => $_POST['chk_6'],
						]
					);
					$humans             = $request->only( 'Human' )['Human'];
					$model->longtitle   = json_encode( $humans );
					break;
				case 'bandit':
					$model->description = json_encode(
						[
							'modal_text'  => $_POST['modal_text'],
							'modal_btn'   => $_POST['modal_btn'],
							'tumb_on_off' => $_POST['tumb_on_off'],
							'rocket_btn'  => $_POST['rocket_btn'],
							'rotator1'    => $_POST['rotator1'],
							'rotator2'    => $_POST['rotator2'],
							'rotator3'    => $_POST['rotator3'],
							'rotator4'    => $_POST['rotator4'],
						]
					);
					break;
				case 'condoms-white':
					$model->description = json_encode(
						[
							'Tabs' => $_POST['Tab'],
						]
					);
//                    dd(json_decode($model->description));
					break;
				case 'consultants':
					$model->description = json_encode(
						[
							'description'  => $_POST['description'],
							'consultants'  => $_POST['Consultant'],
							'consHeader_1' => $_POST['consHeader_1'],
							'consHeader_2' => $_POST['consHeader_2'],
							'consHeader_3' => $_POST['consHeader_3'],
							'consHeader_4' => $_POST['consHeader_4'],
							'consHeader_5' => $_POST['consHeader_5'],
							'consHeader_6' => $_POST['consHeader_6'],
							'consHeader_7' => $_POST['consHeader_7'],
							'list'         => $_POST['list'],
						]
					);
					break;
				case 'aids-test':
					$model->description = json_encode(
						[
							'description'   => $_POST['description'],
							'test_btn'      => $_POST['test_btn'],
							'test_btn_next' => $_POST['test_btn_next'],
						] );
					break;
			}
			$model->save();


			return redirect()->route( 'staticPage' );
		}

		$modal = json_decode( $model->description );
		$model->merge( $modal );
		switch ( $name ) {
			case 'aids':
				break;
			case 'slide-bubles':
				break;
			case'slide-rocket':
				break;
			case 'with-who':
				$model->humans = json_decode( $model->longtitle ) ?? [];
				break;
			case 'condoms-white':
//                dd($model);
				break;
			case 'consultants':
				$model->consultants = $model->consultants ?? [];
				break;
		}

//        dd($model);
		$title = 'Редактирование ' . ucfirst( $name );

		$form = $this->prefix . 'form.' . strtolower( $name );

		return view( 'admin.static.form_layout' )->with( compact( 'model', 'title', 'form' ) );
	}
}
