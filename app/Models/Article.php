<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
      //主键
      protected $primaryKey = 'id';
      protected $table = "article";
      // 日期格式
      public $timestamps = true;
      // 自动记录创建和修改时间
      protected $dateFormat = 'Y-m-d H:i:s';

      //默认更新时间的字段
      const CREATED_AT = 'created_at';
      const UPDATED_AT = 'updated_at';

}
