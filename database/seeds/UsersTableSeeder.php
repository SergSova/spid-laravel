<?php

use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 30.03.2018
 * Time: 15:06
 */
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $keys = [
            'id',
            'name',
            'email',
            'password',
            'avatar',
            'admin',
            'viewer',
            'provider',
            'provider_id',
            'access_token',
            'remember_token',
            'created_at',
            'updated_at',
        ];
        $arr = [
            [
                1,
                'Serg Sova',
                'sergsova25@gmail.com',
                '',
                'https://lh6.googleusercontent.com/-vHLjTilZs3g/AAAAAAAAAAI/AAAAAAAAAqY/nPQRmS2bwiM/photo.jpg?sz=50',
                1,
                1,
                'google',
                '103365682163011175506',
                'ya29.GlyNBYlhfYnSUSqtmhPCT6HIMWVB2XC77D1k9Z7YH2o1Xs3ngEWKpfspnakPdtoPptQqUpjb0fMgrqNpf2t0qYFohexWq-L7EtUuc3JwCUbYin0L1gxfXVLCOiOdlw',
                'iiLQ3skPHRr6BcDhM5i8QoYiLtqiL37ZEREAOgCE2NV43zwmJxAK40sxGG4f',
                '2018-03-23 06:52:26',
                '2018-03-29 09:51:39',
            ],
            [
                3,
                'CALIFORNIAN ROCKSTAR',
                'narutobestclubcom@gmail.com',
                '',
                'https://lh5.googleusercontent.com/-xtXHGNO3HxI/AAAAAAAAAAI/AAAAAAAAALI/FPu7jUD0T-A/photo.jpg?sz=50',
                1,
                1,
                'google',
                '108915828138946367018',
                'ya29.GluHBStn5JmEYpVoxZbniJvfWG_ltZpB3jZENhJj-J9O47byB6H9StiZ9gRMODBA1x9nEUnrUVOyhDkDksSxxkjkbLaZ_cGXDhb2DereDUUqcZGAZJCFEwWedWJt',
                'XCc3UOyNufjiOm22uOREfBwQJ9VmOGxOpjEEbCiMtn27jLr644WxOXyHgiKc',
                '2018-03-23 09:11:58',
                '2018-03-23 09:11:58',
            ],
            [
                4,
                'Olena',
                'sergsova@ukr.net',
                '$2y$10$R4mhzKOj5ukn/vZShS.3oeN97m5YhpkeXoneufZOk4QcymYf0qv6G',
                null,
                1,
                1,
                null,
                null,
                null,
                'Q7JMhFJHBSaRhcBvnacvcOtSRuJIGVBvbnHTHDEhXMxXK1pXyIvDbDml47tA',
                '2018-03-26 06:49:29',
                '2018-03-26 06:49:29',
            ],
            [
                5,
                'admin',
                'admin@ukr.net',
                '$2y$10$x7abUP9it/chNpQ9YVMgk.E7qilcmE5wfkanS.SHNdcG990zfsYwe',
                null,
                1,
                1,
                null,
                null,
                null,
                'X7tlzir2XLrWJcCyoAzMxmoOSmTYUgYG9h2FnCCf9jo3WuMLzOOPa6Ng7L29',
                '2018-03-26 06:50:55',
                '2018-03-26 06:50:55',
            ],
            [
                6,
                'alex_wert',
                'alexandrphone07@gmail.com',
                '$2y$10$5JnQig.fQ.bS79BgHbnjMe5jFzUYAv6FixSoecq0UYHMSWTximtOG',
                null,
                0,
                1,
                null,
                null,
                null,
                null,
                '2018-03-26 07:26:36',
                '2018-03-26 07:26:36',
            ],
            [
                7,
                'Александр',
                'sasha54ua@gmail.com',
                '$2y$10$A586oxpzplhwM6Np9YgO4uDYaCEnbIs2ugYNTO4iUmu5ceKBTJpY6',
                null,
                1,
                1,
                null,
                null,
                null,
                null,
                '2018-03-27 06:40:15',
                '2018-03-27 06:40:15',
            ],
        ];
        $users = array_map(
            function ($el) use ($keys) {
                return array_combine($keys, $el);
            },
            $arr
        );

        DB::table('users')->insert($users);
    }

}