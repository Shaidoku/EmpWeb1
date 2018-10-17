<ul class="sidebar-menu">
  <li class="header">Controles</li>
<!--Link de inicio-->
    <li {{request()->is('admin') ? 'class=active' : ''}}>
      <a href="/home">
        <i class="fa fa-institution">
        </i> 
        <span>
          Inicio
        </span>
      </a>
    </li>
<!--Fin inicio-->

<!--Noticias-->
    <li class="treeview {{request()->is('admin/news*') ? 'active' : ''}}">
      <a href="#">
        <i class="fa fa-newspaper-o">
        </i> 
        <span> 
          Noticias
        </span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right">
          </i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/news') ? 'class=active' : ''}}>
          <a href="{{route('admin.news.index')}}">
            <i class="fa fa-eye"> 
              Todas las noticias
            </i>
          </a>
        </li>
        <li {{request()->is('admin/news/create') ? 'class=active' : ''}}>
          <a href="{{route('admin.news.create')}}">
            <i class=" fa fa-plus"> 
              Crear evento
            </i>
          </a>
        </li>
      </ul>
    </li>
<!--End Noticias-->

<!--Eventos-->
    <li class="treeview {{request()->is('admin/events*') ? 'active' : ''}}">
      <a href="#">
        <i class="fa fa-star-o">
        </i> 
        <span> 
          Eventos
        </span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right">
          </i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/events') ? 'class=active' : ''}}>
          <a href="{{route('admin.events.index')}}">
            <i class="fa fa-eye"> 
              Todos los Eventos
            </i>
          </a>
        </li>
        <li {{request()->is('admin/events/create') ? 'class=active' : ''}}>
          <a href="{{route('admin.events.create')}}">
            <i class=" fa fa-plus"> 
              Crear evento
            </i>
          </a>
        </li>
      </ul>
    </li>
<!--End eventos-->

<!--Mensajes web-->
    <li class="treeview {{request()->is('admin/messages*') ? 'active' : ''}}">
      <a href="#">
        <i class="fa fa-commenting-o">
        </i> 
        <span> 
          Mensajes
        </span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right">
          </i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/messages') ? 'class=active' : ''}}>
          <a href="{{route('admin.messages.index')}}">
            <i class="fa fa-eye"> 
              Todos los Mensajes
            </i>
          </a>
        </li>
      </ul>
    </li>
<!--End Mensajes web-->

<!--Usuarios-->
    <li class="treeview {{request()->is('admin/users*') ? 'active' : ''}}">
      <a href="#">
        <i class="fa fa-users">
        </i> 
        <span> 
          Usuarios
        </span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right">
          </i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/users*') ? 'class=active' : ''}}>
          <a href="{{route('admin.users.index')}}">
            <i class="fa fa-eye"> 
              Todas los usuarios
            </i>
          </a>
        </li>
        <li {{request()->is('admin/users/create') ? 'class=active' : ''}}>
          <a href="{{route('admin.users.create')}}">
            <i class="fa fa-plus"> Añadir usuario</i>
          </a>
        </li>
      </ul>
    </li>
<!--End Usuarios-->
</ul>
      
