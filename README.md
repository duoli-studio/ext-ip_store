## Ip 库说明

支持的IP类型, mon17是最全面的, 默认是这种类型


```
qqwry   :  http://www.cz88.net/
tiny    :  https://sourceforge.net/projects/tinyipapp/
taobao  :  淘宝
sina    :  新浪
mon17   :  https://www.ipip.net/
```

## 配置
本扩展拓展于 `poppy/framework` 框架. 添加/更改配置


```
// poppy.php
'extension' => [
    'ip_store' => [
        'type' => 'mon17'
    ]
]
```

## For Laravel 
如果 Laravel 中使用, 需要添加 Service Provider 到 app providers 数组

```
Poppy\Extension\IpStore\ExtensionServiceProvider.php
```

你可以加入 facade 或者直接使用这个函数

```
app('poppy.ext.ip_store')->area()
```

### License

The  plugin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
