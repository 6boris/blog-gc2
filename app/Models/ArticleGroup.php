<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleGroup extends Model
{
          //主键
          protected $primaryKey = 'id';
          protected $table = "article_group";
          // 日期格式
          public $timestamps = true;
          // 自动记录创建和修改时间
          protected $dateFormat = 'Y-m-d H:i:s';
}
