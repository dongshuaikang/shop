<?php
return [
    //应用ID,您的APPID。
    'app_id' => "2016092600603162",

    //商户私钥
    'merchant_private_key' => "MIIEogIBAAKCAQEAqbBSimkMARrm1f2EnxsbLwl7yyThilfW7wAKS2oIHp3ZNm1gX485bVy4J6lA27cE7DihPz+PayPNrRcmzW0Qq9Elp3CnWG7/Sev52RIdzfx54ALPSZy9cUnZ3D6c5S5/OnwTY3j2dFWacMebJaTdSoCsxiJCEGnZp0FXXd9diToP34pkYhVBJvSnIzuGvndegzEhbcQiJ+xKG9CqOWlj0P77aVd4qZS5E6BhJGRlhvsSir6yLIlRUhpq4iu0SPTMhScfnv34rHnlDHBVVrJy3jsxvLvwzDekLuxF2UIWkRghD3c1N9Jih1aTURVr1Elw0cy8LQ5wt/poAwe/dnYzIwIDAQABAoIBAH0+u22Vo1qddIu1l1GoPCQ3p7uE+UOXGflF2lNXa67NaymVCXD+0bA6o2ICtvB04ZlJIxr/2ueFgaWkVOuC+K8Yq+YubBYFtz/kgIELshv7oikJad43Zkxb6gV54Wv3KckNE3J0MdQj6t4bNhRO31bCKsQDPSfIOPIOdGHBH9TMZlZsPId868ciPC64Fc4a9PByrR/ou1nlN9dzgwvG6ZTAPpmabbv7J8asB/q/MsLBLvF2GY94ainF3hyeemmN8V3c5fgZIHmP/ForDsUcF3DnD3bMeUmuuTFkS1rnLauyKaI7xt/1SPKEpvHnsthYMhOkFeeTbZSupjYCfgG/WKECgYEA19MRAB4AeLXj3vXfR/J2dustQTmomFQYTWFqexmXu8RMcqC/tar8ZCR8WoJ70WsYrs/j8znqoL+VxalAqokC5T76XMOXvrb7Yr2KEHILgujBhU7xoOKimZ1xgUbRD/D9GSCdPzVfQGpV3hvPjSbCWDnKNFBmpPsKAv2TgXoRvX8CgYEAyUayfaDQ6w2aBqSFT5f8kezHaHTaw6tOnJLhKhGPyqnDg/fmlBIWVSLbuAQo0b5WbjdCwXVkp/dODOrdJ/q1ffVA//eqQuul5RgCvKAs75f/7VheB+eB7m8Hf0oM5GaRgiQggyWBVUJhFXOEjE7Xt44BrP6gBUaJwCw2FszhpF0CgYBmCRuYepauew/ocUXGthLb1gPnOmNC4T88FjpJSKg71WpvJyB7uwLoNXe1MstnDsL0osSaUV9j8C/W61XvSidcSpIDGVW8jLX80K9dZw2aLoCPjeserQdCqPTosZpVdxGxt4GgSJNn2N4PzAYsLY7kNy4p3XkptqXdFBWQuS158QKBgGKbQxiu74soV7xHX5Q15qPq92piTUatJ08n2i3M+sAT2VhO2+TQ06YT9Ma7KvBOqnNGmWrDw3NSgidr7LsIZV/3BkggooY0gkqxL64PXtRmiBhUQYTn00znkim3Moe3BDRY1KDLgAgwA/YJaPeALMidRo7lE6ph+1xtjHYxG551AoGAY0UMuGXLQQlv2PwfBG4PVvOG4T4Gi2Gvjk8aQil/z27AoZlwIsdARDrbrSRof4avErtySyCchRk+mF5QQmXGiNekwOOURHQZN5CeT3I/U0GCOVX2RZD4NBGHun2BAbtxqGpdOuI1mvHjGDb20Ra9Ta4GMfZi0gTtOlPXfqsRXWA=",

    //异步通知地址
    'notify_url' => "http://47.93.239.99/returnfalse",

    //同步跳转
    'return_url' => "http://www.myshop.com/returntrue",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4qhj+x3QFxy6Sa5DKTO4QuvHjJOh127nAD8jVA9UDGF1LzXNl+sksPuk91bJia6pHUxvVlyq92sU/b3y+3RxIGviByvgf2EudT5jMXqUvj9S7P83G5CAriYJac/RHMRAOO6RpMmV4uA7nFDHkWe6+GVdTSN+kp5YoVkBUnutl0O+5ZEjRPbipMgyaY5ctYck0whzy6eyhS1c/3AHXjomxu7tjCZNDEFT7lYG10omOfJrHgv+1USDumpC3S4aGpZWnnzqMSeXPkGwCGcIlNWClBRhXSmyWmThCc8sbH4bdzyW3zEtJiOW1qvl2AcdmbClAwbxLfoQKR90tXV6mq4pDwIDAQAB",
];