<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>



## 项目描述

* 产品名称： Kayle 博客
* 项目代号： Kayle
* 项目地址：[www.kyle.ren](www.kyle.ren)

此项目为个人开发的博客项目，记录了自己的学习路劲。

![Kayle Blog](./images/1525519691461.jpg)


## 功能如下
* 用户认证 —— 注册、登录、退出；
* 个人中心 —— 用户个人中心，编辑资料；
* 用户授权 —— 作者才能删除自己的内容；
* 上传图片 —— 修改头像和编辑话题时候上传图片；
* 表单验证 —— 使用表单验证类；
* 文章发布时自动 Slug 翻译，支持使用队列方式以提高响应；
* 站点『活跃用户』计算，一小时计算一次；
* 多角色权限管理 —— 允许站长，管理员权限的存在；
* 后台管理 —— 后台数据模型管理；
* 邮件通知 —— 发送新回复邮件通知，队列发送邮件；
* 站内通知 —— 话题有新回复；
* 自定义 Artisan 命令行 —— 自定义活跃用户计算命令；
* 自定义 Trait —— 活跃用户的业务逻辑实现；
* 自定义中间件 —— 记录用户的最后登录时间；
* XSS 安全防御；


## 运行环境要求

* Nginx 1.8+
* PHP 7.1+
* Mysql 5.7+
* Redis 3.0+

## 环境部署
&emsp;&emsp;本项目代码使用 PHP 框架 Laravel 5.6 开发，本地开发环境使用Laragon。
下文将在假定读者已经安装好了 Laragon 的情况下进行说明。如果您还未安装 Laragon，可以参照 Laragon 安装与设置 进行安装配置。

### 基础安装
* 1. 克隆源代码
```shell
git clone git@github.com:kayles/kayleblog.git
```

* 2. 配置本地的 Laragon 环境
```shell

```

* 3. 安装扩展包依赖
```shell
composer install
```

* 4. 生成配置文件
```shell
cp .env.dev .env
```

* 5. 你可以根据情况修改 .env 文件里的内容，如数据库连接、缓存、邮件设置等：
```shell
APP_URL=http://kayle.test
...
DB_HOST=localhost
DB_DATABASE=larabbs
DB_USERNAME=homestead
DB_PASSWORD=secret

DOMAIN=.larabbs.test
```

* 6. 生成数据表及生成测试数据
```shell
php artisan migrate --seed
```
>初始的用户角色权限已使用数据迁移生成。

* 7. 生成秘钥
```shell
php artisan key:generate
```

* 8. 配置 hosts 文件
```shell
echo "192.168.10.10   kayle.test" | sudo tee -a /etc/hosts
```
## 前端框架安装
* 安装 node.js
```shell
直接去官网 https://nodejs.org/en/ 下载安装最新版本。
```


* 安装 Yarn
```shell
请安装最新版本的 Yarn —— http://yarnpkg.cn/zh-Hans/docs/install
```

* 安装 Laravel Mix
```shell
yarn install
```

* 编译前端内容
```shell
// 运行所有 Mix 任务...
npm run dev

// 运行所有 Mix 任务并缩小输出..
npm run production
```

* 监控修改并自动编译
```shell
npm run watch

// 在某些环境中，当文件更改时，Webpack 不会更新。如果系统出现这种情况，请考虑使用 watch-poll 命令：

npm run watch-poll
```


### 链接入口
* 首页地址：http://kayle.test/
* 管理后台：http://kayle.test/admin
* 管理员账号密码如下:
```shell
username: admin
password: 123456
```
>至此, 安装完成 ^_^。


## 服务器架构说明
&emsp;&emsp;这里可以放一张大大的服务器架构图，下面是个例子

![网站架构图](./images/1525520892851.jpg)

>上图使用工具 ProcessOn 绘制。

## 扩展包使用情况

|	扩展包	|	 一句话描述 	|	本项目应用场景  |
:---:|:---:|:---:
|	Intervention/image	|	 图片处理功能库 	|	用于图片裁切  |
|	guzzlehttp/guzzle	|	 HTTP 请求套件 	|	请求百度翻译 API  |
|	predis/predis	|	 Redis 官方首推的 PHP 客户端开发包	 	|	缓存驱动 Redis 基础扩展包  |
|	barryvdh/laravel-debugbar	|	 页面调试工具栏 (对 phpdebugbar 的封装) 	|	开发环境中的 DEBUG  |
|	spatie/laravel-permission	|	 角色权限管理 	|	角色和权限控制  |


## 自定义 Artisan 命令
|	命令行名字	|	 说明 	|	Cron  |	代码调用 |
:---:|:---:|:---:|:---:
|	larabbs:calculate-active-user	|	 生成活跃用户 	|	一小时运行一次  |	无	|
|	larabbs:sync-user-actived-at	|	 从 Redis 中同步最后登录时间到数据库中 	|	每天早上 0 点准时  |	无	|


## 队列清单

|	扩展包	|	 一句话描述 	|	本项目应用场景  |
:---:|:---:|:---:
|	TranslateSlug.php	|	 将话题标题翻译为 Slug	|	TopicObserver 事件 saved()  |
|	TopicReplied.php	|	 通知作者话题有新回复 	|	话题被评论以后 |


## 关于我

* 邮箱   [kylesliu@outlook.com](kyleliu@outlook.com)
* GitHub   [Kayle Liu](https://github.com/kayles)
* Twiter     [Kayle Liu](https://twitter.com/kaylesliu)
* QQ   [280183608]()

