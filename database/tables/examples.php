<?php

return [
  'categorys' => [
    'name'      => '全局类别表',
    'fieldset'  => [
      'id'      => fn($tab) => $tab('bigint')->increment()->primary(),
      'name'    => fn($tab) => $tab('varchar', 32)->comment('类别名称'),
      'alias'   => fn($tab) => $tab('varchar', 32)->comment('别名，显示名称'),
      'g'       => fn($tab) => $tab('varchar', 24)->comment('分组'),
      'pid'     => fn($tab) => $tab('bigint')->default(0)->comment('上级ID'),
      'level'   => fn($tab) => $tab('tinyint', 4)->default(1)->comment('分级深度'),
      'status'  => fn($tab) => $tab('tinyint', 4)->default(1)->comment('状态'),
      'remark'  => fn($tab) => $tab('varchar', 255)->nullable()->default(null)->comment('备注'),
      'attach'  => fn($tab) => $tab('json')->nullable()->default(null)->comment('扩展'),
      'address' => fn($tab) => $tab('string')->nullable()->default(null)->comment('寻址'),
    ],
    'timestamps' => true,
  ],
];
