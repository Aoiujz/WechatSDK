<?php
require_once('WechatCrypt.class.php');

$key   = 'q6FPCUoCQWaOiR3UUe5RfQu8A7hlJcMW4BnNyH9z2il';
$appid = 'wx4d5073e65ba9fcce';

$crypt = new Com\WechatCrypt($key, $appid);

var_dump(function_exists('mcrypt_module_open'));

var_dump($crypt);

$encode = $crypt->decrypt("ZaiW45sCRwJbyE8SwIR389G/jC8jK/2T78AdKgZqDrV+Yq4jiH1wz/BZGEcnP2MZTUHjRv6HHpSjt9hYMzjyx3XFZjHqct7DxkAml81RKdmTEw+IGmszQ87f3lL0Qvsc3LJOUAr31QV8CXxCmPPoyD6LFQHVNkKyHCn509I46/8h3gSZ4RDt2GydzZmGVHvzfzT2p+BCSuXWU5sHB3+9exXTIiKvo6SMx9kuMnC7NgCKm0Sgp8zA2n0GXp8rpNKjMpfLz9h7uiQEa6XXRvl1FCh+c8U6Zx2bsBXWkM2t84hIQMHXrxw14SSVQFAJQHCGzkc6rHanIU9lsSMUi9CovRUQv4+3Orrqb/C4bBVr3KFGFQvnmAWiun1LCZxi4uyzNgMmVWDxgN3WifY/OOZopjr4reN7X4IlWmyTVAFKAHdYKmdhqufNjX+hnYAZt0Q9BWXWRj94bDfBq5G6wOt8by2bFO+vsRfnl5KDe9tJ4INvGyN20PfA+uQPO5nhgtF9oWLbDQuDl0dBeOXg6FlTFVyYovQkgm984Alz/mr5erY=");
echo $encode;
// echo "\n";
// echo $crypt->decrypt($encode);
