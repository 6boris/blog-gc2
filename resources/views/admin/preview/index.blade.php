<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <title>aa</title>
</head>
<body>
   <h1>Mysql 日常使用SQL</h1>\n
<ul>\n
<li>记录了关于MySQL日常操作<h2>1.数据库操作</h2>\n
<h3>1.创建数据库</h3>\n
</li>\n
<li>UTF8编码<pre><code class="language-sql">CREATE DATABASE 数据库名\n
  DEFAULT CHARSET utf8\n
  COLLATE utf8_general_ci;        </code></pre>\n
</li>\n
<li>GBK 编码<pre><code class="language-sql">CREATE DATABASE 数据库名\n
  DEFAULT CHARSET gbk\n
  COLLATE gbk_chinese_ci; </code></pre>\n
</li>\n
</ul>\n
<h3>2.查看数据相关信息</h3>\n
<ul>\n
<li>\n
<p>1.查看所有数据库</p>\n
<pre><code class="language-sql">mysql&amp;gt; show databases;\n
+--------------------+\n
| Database           |\n
+--------------------+\n
| information_schema |\n
| anonyblog          |\n
| blog               |\n
| datatable          |\n
| demo               |\n
| mysql              |\n
| performance_schema |\n
| sys                |\n
+--------------------+</code></pre>\n
</li>\n
<li>\n
<p>2.查看当前使用数据库</p>\n
<pre><code class="language-sql">mysql&amp;gt; select database();\n
+------------+\n
| database() |\n
+------------+\n
| NULL       |\n
+------------+</code></pre>\n
</li>\n
<li>\n
<p>3.查看当前数据库大小</p>\n
<pre><code class="language-sql">mysql&amp;gt; use information_schema;\n
Database changed\n
mysql&amp;gt; select concat(round(sum(data_length)/(1024*1024),2) + round(sum(index_length)/(1024*1024),2),'MB') as 'DB Size'\n
       from tables\n
       where table_schema='blog';\n
+---------+\n
| DB Size |\n
+---------+\n
| 0.02MB  |\n
+---------+\n
1 row in set (0.00 sec)</code></pre>\n
</li>\n
<li>\n
<p>4.查看数据所占的空间大小</p>\n
<pre><code class="language-sql">mysql&amp;gt;  select concat(round(sum(data_length)/(1024*1024),2),'MB') as 'DB Size'\n
        from tables\n
        where table_schema='blog';\n
+---------+\n
| DB Size |\n
+---------+\n
| 0.01MB  |\n
+---------+\n
1 row in set (0.00 sec)</code></pre>\n
</li>\n
<li>\n
<p>5.查看数据库索引所占空间大小</p>\n
<pre><code class="language-sql">mysql&amp;gt;  select concat(round(sum(index_length)/(1024*1024),2),'MB') as 'DB Size'\n
           from tables\n
           where table_schema='blog';\n
+---------+\n
| DB Size |\n
+---------+\n
| 0.01MB  |\n
+---------+</code></pre>\n
</li>\n
<li>\n
<p>6.查看数据编码</p>\n
<pre><code class="language-sql">mysql&amp;gt; show variables like 'character%';\n
+--------------------------+------------------------------------------------------------+\n
| Variable_name            | Value                                                      |\n
+--------------------------+------------------------------------------------------------+\n
| character_set_client     | gbk                                                        |\n
| character_set_connection | gbk                                                        |\n
| character_set_database   | utf8                                                       |\n
| character_set_filesystem | binary                                                     |\n
| character_set_results    | gbk                                                        |\n
| character_set_server     | latin1                                                     |\n
| character_set_system     | utf8                                                       |\n
| character_sets_dir       | E:\Web\Server\wamp64\bin\mysql\mysql5.7.14\share\charsets\ |\n
+--------------------------+------------------------------------------------------------+</code></pre>\n
</li>\n
</ul>\n
<table>\n
<thead>\n
<tr>\n
<th>字段</th>\n
<th>含义</th>\n
</tr>\n
</thead>\n
<tbody>\n
<tr>\n
<td>character_set_client</td>\n
<td>客户端编码方式</td>\n
</tr>\n
<tr>\n
<td>character_set_connection</td>\n
<td>建立连接使用的编码</td>\n
</tr>\n
<tr>\n
<td>character_set_database</td>\n
<td>数据库的编码</td>\n
</tr>\n
<tr>\n
<td>character_set_results    W</td>\n
<td>结果集的编码</td>\n
</tr>\n
<tr>\n
<td>character_set_server</td>\n
<td>数据库服务器的编码</td>\n
</tr>\n
</tbody>\n
</table>\n
<p>&gt; &amp;emsp;&amp;emsp;开始你们的asd奥术大师大所大所阿达奥术大师大所大所大所多所所所\n
&gt; 所所所所所所所所所所所所所所所所所所所所所所所所所少时诵诗书所\n
&gt; 所所所所所所</p>\n
<h2>2.基本操作</h2>\n
<h3>1.查询</h3>\n
<h3>2.修改</h3>\n
<h3>3.删除</h3>\n
<h3>4.增加</h3>\n
<h2>3.表操作</h2>\n
<h3>1.创建表</h3>\n
<pre><code class="language-sql">CREATE TABLE table1(\n
    id int(2) NOT NULL PRIMARY_KRY,\n
    username varchar(5) NOT NULL,\n
\n
\n
);</code></pre>\n
<h3>2.修改表结构</h3>\n
<ul>\n
<li>添加字段<pre><code class="language-sql">ALTER TABLE 表名 ADD 列名 类型;</code></pre>\n
</li>\n
<li>删除字段<pre><code class="language-sql">ALTER TABLE 表名 DROP COLUMN 列名;</code></pre>\n
</li>\n
<li>修改字段<pre><code class="language-sql">ALTER TABLE 表名 MODIFY COLUMN 列名 类型;</code></pre>\n
</li>\n
<li>添加主键<pre><code class="language-sql">ALTER TABLE 表名 ADD PRIMARY KEY (列名);</code></pre>\n
</li>\n
<li>删除主键 <pre><code class="language-sql">ALTER TABLE 表名 DROP PRIMARY KEY;</code></pre>\n
</li>\n
<li>修改主键<pre><code class="language-sql">ALTER TABLE 表名 MODIFY PRIMARY KEY(列名);</code></pre>\n
</li>\n
<li>添加外键<pre><code class="language-sql">ALTER TABLE 从表 ADD CONSTRAINT 外键名称;</code></pre>\n
</li>\n
<li>修改外键<pre><code class="language-sql">ALTER TABLE 表名 DROP FOREING KEY 外键名称;</code></pre>\n
</li>\n
<li>修改默认值<pre><code class="language-sql">ALTER TABLE 表名 ALTER 字段名 SET DEFAULT 100;</code></pre>\n
</li>\n
<li>删除默认值<pre><code class="language-sql">ALTER TABLE 表名 ALTER 字段名 DROP DEFAULT;</code></pre>\n
</li>\n
<li>更改表名<pre><code class="language-sql">RENAME TABLE 原表名 TO 新表名;</code></pre>\n
</li>\n
<li>案列<ul>\n
<li>修改已经存在的主键(先删除所有主键，再添加主键)<pre><code class="language-sql">ALTER TABLE demo_user\n
DROP PRIMARY KEY,\n
ADD PRIMARY KEY (`id`);</code></pre>\n
</li>\n
</ul>\n
</li>\n
<li>添加一个字段在指定字段之后<pre><code class="language-sql">ALTER TABLE demo_user\n
  ADD COLUMN name  varchar(255) NOT NULL AFTER created_at;</code></pre>\n
</li>\n
<li>添加一个字段在第一行<pre><code class="language-sql">ALTER TABLE `demo_user`\n
ADD COLUMN `NAME`  varchar(255) NULL FIRST ;</code></pre>\n
<h3>3.删除表</h3>\n
<p>&gt;DROP TABLE 表名</p>\n
</li>\n
<li>清空表<pre><code class="language-sql">\n
// 此方法删除以后可以进行事物的回滚恢复表\n
DROP TABLE 表名</code></pre>\n
</li>\n
</ul>\n
<p>DELETE FROM 表名\n
TRUNCATE TABLE 表名</p>\n
<pre><code>### 4.查看表结构\n
```sql\n
DESC 表名</code></pre>\n
<h2>4.用户基本管理</h2>\n
<p>&gt; MySQL所有基于用户的权限都记录在MySQL数据库的USER表中，可以通过修改USER表的数据修改权限</p>\n
<h3>1.创建用户</h3>\n
<pre><code class="language-sql">CREATE USER '用户名'@'IP地址'  IDENTIFIED BY '密码';</code></pre>\n
<h3>2.修改用户</h3>\n
<ul>\n
<li>1修改用户名<pre><code class="language-sql">RENAME USER '用户名'@'IP地址' TO '新用户名';</code></pre>\n
</li>\n
<li>2.修改密码<pre><code class="language-sql">\n
SET password FOR  'root'@'localhost'=password('jia')</code></pre>\n
</li>\n
</ul>\n
<p>//也可以修改MYSQL数据库中的USER表\n
UPDATE mysql.user SET password=password('jia') WHERE user='root';</p>\n
<p>mysql&gt; select host,user,authentication_string from user;\n
+-----------+-----------+-------------------------------------------+\n
| host      | user      | authentication_string                     |\n
+-----------+-----------+-------------------------------------------+\n
| localhost | root      | <em>F389114597A8A434838497DE7F5C54DAB44CA4D1 |\n
| localhost | mysql.sys | </em>F389114597A8A434838497DE7F5C54DAB44CA4D1 |\n
+-----------+-----------+-------------------------------------------+</p>\n
<pre><code>&amp;gt; 注意：MySQL5.7以后保存密码的字段改为authentication_string MySQL5.6及其以前面膜字段都是password\n
\n
### 3.删除用户\n
```sql\n
DROP USER '用户名'@'IP地址';\n
//也可以删除MySQL库中USER表的相应记录</code></pre>\n
<h2>5.用户授权管理</h2>\n
<h3>1.查看权限</h3>\n
<pre><code class="language-sql">SHOW GRANTS FOR '用户名'@'IP地址';</code></pre>\n
<h3>1.给予权限</h3>\n
<pre><code class="language-sql">GRANT 权限 ON 数据库.表 TO ‘用户’@'IP地址';</code></pre>\n
<h3>1.取消权限</h3>\n
<pre><code class="language-sql">REVOKE 权限 ON 数据库.表 FROM ‘用户’@'IP地址';</code></pre>\n
<h3>1.简单案列</h3>\n
<table>\n
<thead>\n
<tr>\n
<th>常用权限</th>\n
<th>解释</th>\n
</tr>\n
</thead>\n
<tbody>\n
<tr>\n
<td>ALL PRIVILEGES</td>\n
<td>除GRANT以外所有的权限</td>\n
</tr>\n
<tr>\n
<td>SELECT</td>\n
<td>仅查询权限</td>\n
</tr>\n
<tr>\n
<td>INSERT</td>\n
<td>仅插入权限</td>\n
</tr>\n
<tr>\n
<td>UPDATE</td>\n
<td>仅更新权限</td>\n
</tr>\n
<tr>\n
<td>DELETE</td>\n
<td>仅删除权限</td>\n
</tr>\n
<tr>\n
<td>SELECT,INSERT</td>\n
<td>查询和插入权限</td>\n
</tr>\n
<tr>\n
<td>USAGE</td>\n
<td>无访问权限</td>\n
</tr>\n
</tbody>\n
</table>\n
<table>\n
<thead>\n
<tr>\n
<th>目标数据库或者表</th>\n
<th>解释</th>\n
</tr>\n
</thead>\n
<tbody>\n
<tr>\n
<td>数据库名.*</td>\n
<td>数据库中所有的表</td>\n
</tr>\n
<tr>\n
<td>数据库.表</td>\n
<td>数据库中的某张表</td>\n
</tr>\n
<tr>\n
<td>数据库.储存过程</td>\n
<td>指定数据库中的储存过程</td>\n
</tr>\n
<tr>\n
<td><em>.</em></td>\n
<td></td>\n
</tr>\n
</tbody>\n
</table>\n
<table>\n
<thead>\n
<tr>\n
<th>用户限制</th>\n
<th>解释</th>\n
</tr>\n
</thead>\n
<tbody>\n
<tr>\n
<td>用户名@IP地址</td>\n
<td>用户必须在指定IP下才能访问</td>\n
</tr>\n
<tr>\n
<td>用户名@192.168.1.%</td>\n
<td>用户名在指定IP地址段才能访问（%表示单个或多个通配符）</td>\n
</tr>\n
<tr>\n
<td>用户名@*</td>\n
<td>用户可以在任意IP访问</td>\n
</tr>\n
</tbody>\n
</table>\n
<table>\n
<thead>\n
<tr>\n
<th>Privilege</th>\n
<th>Context</th>\n
<th>Comment</th>\n
</tr>\n
</thead>\n
<tbody>\n
<tr>\n
<td>Alter</td>\n
<td>Tables</td>\n
<td>修改表</td>\n
</tr>\n
<tr>\n
<td>Alter routine</td>\n
<td>Functions,Procedures</td>\n
<td>To alter or drop stored functions/procedures</td>\n
</tr>\n
<tr>\n
<td>Create</td>\n
<td>Databases,Tables,Indexes</td>\n
<td>创建表和数据库</td>\n
</tr>\n
<tr>\n
<td>Create routine</td>\n
<td>Databases</td>\n
<td>To use CREATE FUNCTION/PROCEDURE</td>\n
</tr>\n
<tr>\n
<td>Create temporary tables</td>\n
<td>Databases</td>\n
<td>To use CREATE TEMPORARY TABLE</td>\n
</tr>\n
<tr>\n
<td>Create view</td>\n
<td>Tables</td>\n
<td>创建视图</td>\n
</tr>\n
<tr>\n
<td>Create user</td>\n
<td>Server Admin</td>\n
<td>创建用户</td>\n
</tr>\n
<tr>\n
<td>Delete</td>\n
<td>Tables</td>\n
<td>删除已经存在的记录</td>\n
</tr>\n
<tr>\n
<td>Drop</td>\n
<td>Databases,Tables</td>\n
<td>删除数据库，表，视图</td>\n
</tr>\n
<tr>\n
<td>Event</td>\n
<td>Server Admin</td>\n
<td>To create, alter, drop and execute events</td>\n
</tr>\n
<tr>\n
<td>Execute</td>\n
<td>Functions,Procedures</td>\n
<td>To execute stored routines</td>\n
</tr>\n
<tr>\n
<td>File</td>\n
<td>File access on server</td>\n
<td>To read and write files on the server</td>\n
</tr>\n
<tr>\n
<td>Grant option</td>\n
<td>Databases,Tables,Functions,Procedures</td>\n
<td>To give to other users those privileges you possess</td>\n
</tr>\n
<tr>\n
<td>Index</td>\n
<td>Tables</td>\n
<td>创建或者删除索引</td>\n
</tr>\n
<tr>\n
<td>Insert</td>\n
<td>Tables</td>\n
<td>向表中插入数据</td>\n
</tr>\n
<tr>\n
<td>Lock tables</td>\n
<td>Databases</td>\n
<td>To use LOCK TABLES (together with SELECT privilege)</td>\n
</tr>\n
<tr>\n
<td>Process</td>\n
<td>Server Admin</td>\n
<td>To view the plain text of currently executing queries</td>\n
</tr>\n
<tr>\n
<td>Proxy</td>\n
<td>Server Admin</td>\n
<td>To make proxy user possible</td>\n
</tr>\n
<tr>\n
<td>References</td>\n
<td>Databases,Tables</td>\n
<td>To have references on tables</td>\n
</tr>\n
<tr>\n
<td>Reload</td>\n
<td>Server Admin</td>\n
<td>刷新表，日志，权限</td>\n
</tr>\n
<tr>\n
<td>Replication client</td>\n
<td>Server Admin</td>\n
<td>服务器位置访问</td>\n
</tr>\n
<tr>\n
<td>Replication slave</td>\n
<td>Server Admin</td>\n
<td>由复制从属使用</td>\n
</tr>\n
<tr>\n
<td>Select</td>\n
<td>Tables</td>\n
<td>查询表中的记录</td>\n
</tr>\n
<tr>\n
<td>Show databases</td>\n
<td>Server Admin</td>\n
<td>显示所有数据库</td>\n
</tr>\n
<tr>\n
<td>Show view</td>\n
<td>Tables</td>\n
<td>To see views with SHOW CREATE VIEW</td>\n
</tr>\n
<tr>\n
<td>Shutdown</td>\n
<td>Server Admin</td>\n
<td>关闭数据库服务</td>\n
</tr>\n
<tr>\n
<td>Super</td>\n
<td>Server Admin</td>\n
<td>To use KILL thread, SET GLOBAL, CHANGE MASTER, etc.</td>\n
</tr>\n
<tr>\n
<td>Trigger</td>\n
<td>Tables</td>\n
<td>To use triggers</td>\n
</tr>\n
<tr>\n
<td>Create tablespace</td>\n
<td>Server Admin</td>\n
<td>To create/alter/drop tablespaces</td>\n
</tr>\n
<tr>\n
<td>Update</td>\n
<td>Tables</td>\n
<td>更新某条记录</td>\n
</tr>\n
</tbody>\n
</table>\n
<pre><code class="language-sql">// 将所有关于指定数据库中的表的所有操作权限给某用户\n
GRANT ALL PRIVILEGES ON  数据库.表 TO '用户名'@'IP';\n
\n
// 将DB1所有表的插入和更新权限给指定用户\n
GRANT INSERT,UPDATE ON  DB1.*  TO  '用户名'@'IP';\n
\n
// 回收指定用户的指定权限\n
REVOKE SELECT ON DB1.TB1 FROM '用户名'@'IP'\n
</code></pre>\n
<h3>1.查看权限</h3>
"""
</body>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>