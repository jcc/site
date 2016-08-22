<template>
  <div class="console-content">
    <div class="page-header">
        <h2>所有技巧 
        <router-link to="/dashboard/trick/create" class="btn btn-xs btn-info">新建技巧</router-link>
        </h2>
    </div>
    <div class="well">
      <table class="table table-wechat">
        <thead>
        <tr>
            <td>标题</td>
            <td>作者</td>
            <td>浏览数</td>
            <td>添加时间</td>
            <td>操作</td>
        </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="5" class="text-center">无数据</td>
          </tr>
        </tbody>
        <tfoot>
          <tr><td colspan="5"></td></tr>
        </tfoot>
      </table>
    </div>
  </div>
</template>
