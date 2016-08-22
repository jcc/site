<template>
  <header class="console-header">
    <div class="container">
      <div class="header-inner table-box">
        <div class="table-row">
          <div class="left table-cell">
            <div class="logo">
              <a href="/dashboard"><h1>Laravel.so | <small>管理中心</small></h1></a>
            </div>
          </div>
          <div class="right table-cell">
            <div class="top-nav">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                          Admin
                          <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="#">账号设置</a>
                          </li>
                          <li class="divider"></li>
                          <li>
                              <a href="#">注销</a>
                          </li>
                      </ul>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>