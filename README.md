# thinkphp3-valet-driver

laravel valet custom driver for thinkphp 3

## 使用

1. 放置到 　**~/.valet/Drivers/**
2. 编辑 **server** 方法识别thinkphp的依据，默认判断是项目根目录下有 **/ThinkPHP**
3. 编辑 **frontControllerPath** 修改valet的目录

## 说明

该驱动为临时编写使用，原理其实就是nginx rewrite的方式用valet提供的驱动方式编写。
