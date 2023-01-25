<div class="lime-sidebar">
    <div class="lime-sidebar-inner slimscroll">
      <ul class="accordion-menu">
        <li class="sidebar-title">Apps</li>
        <li>
          <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}"
            ><i class="material-icons">dashboard</i>Dashboard</a>
        </li>
        <li>
          <a href="/dashboard/messages" class="{{ Request::is('dashboard/messages') ? 'active' : '' }}"><i class="material-icons ">podcasts</i>Broadcast</a>
        </li>
        <li>
            <a href="/dashboard/contact" class="{{ Request::is('dashboard/contact/*') ? 'active' : '' }}"><i class="material-icons ">contacts</i>Contact</a>
          </li>
        <li class="sidebar-title">Automation</li>
        <li>
          <a href="#"
            ><i class="material-icons">chat</i>Auto Reply</a
          >
        </li>
        <li>
            <a href="#"
              ><i class="material-icons">tune</i>Custom Rules</a
            >
          </li>
        <li>
          <a href="#"><i class="material-icons">public</i>Whatsapp Web</a>
        </li>
        <li class="sidebar-title">Store</li>
        <li>
          <a href="products"
            ><i class="material-icons">store</i>Products</a
          >
        </li>
        <li>
          <a href="#"
            ><i class="material-icons">list</i>Transaction</a
          >
        </li>
        <li class="sidebar-title">Other</li>
        <li>
          <a href="/dashboard/help" class="{{ Request::is('dashboard/help') ? 'active' : '' }}"
            ><i class="material-icons">bookmark_border</i>Help Center</a
          >
        </li>

      </ul>
    </div>
  </div>
