<div class="sidebar-header relative flex items-center justify-start mb-3 border-b dark:border-gray-700 z-0">
  <a href="/" class="flex px-5 py-4 mr-4 rtl:ml-4 rtl:mr-0 text-xl whitespace-nowrap">
      <!--Logo start-->
      
          <svg width="30" class="text-primary-500 dark:text-primary-500 brand-logo" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor"/>
                  <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9"/>
              </svg>
      <!--logo End-->
      <h4 class="sidebar-logo" data-setting="app_name" x-text="setting.app_name">Qompac UI</h4>
  </a>
  <div class="sidebar-toggle p-2" x-on:click="sidebarMini" data-toggle="sidebar" data-active="true">
          <i class="icon">
              <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z"
                      fill="white"></path>
                  <path
                      d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z"
                      fill="white"></path>
              </svg>
          </i>
  </div>
</div>
<div class="sidebar-body data-scrollbar">
  <ul class="sidebar-main-menu">
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" tabindex="-1">
            <span class="default-icon">Home</span>
            <span class="mini-icon">-</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link active" aria-current="page"
            href="index.html">
            <i class="icon" data-tp-toggle="tooltip" data-tp-placement="left" data-tp-title="Dashboard">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4"
                        d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                        fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                        fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Dashboard</span>
        </a>
    </li>
    <li class="nav-item" :class="selected.includes('users') ? 'active' : ''">
        <a class="nav-link" :class="selected.includes('users') ? 'active' : ''" @click="toggle('users')">
            <i class="icon" data-tp-toggle="tooltip" data-tp-placement="left" data-tp-title="Users">
                <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z"
                        fill="currentColor"></path>
                    <path opacity="0.4"
                        d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z"
                        fill="currentColor"></path>
                    <path opacity="0.4"
                        d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z"
                        fill="currentColor"></path>
                    <path
                        d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z"
                        fill="currentColor"></path>
                    <path opacity="0.4"
                        d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z"
                        fill="currentColor"></path>
                    <path
                        d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z"
                        fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name ">Users</span>
            <i class="rtl:rotate-180 right-icon dark:text-white"
                x-bind:style="selected.includes('users') ? 'transform:  rotate(90deg)' : ''">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </i>
        </a>
        <ul class="sub-menu" id="users-menu" x-ref="users"
            x-bind:style="selected.includes('users') ? 'max-height: ' + $refs.users.scrollHeight + 'px' : ''">
            <li class="nav-item">
                <a class="nav-link "
                    href="app/user-profile.html" data-sidebar-parent="users">
                    <i class="icon">
                        <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon" data-tp-toggle="tooltip" data-tp-title="User Profile"
                        data-tp-placement="right"> U </i>
                    <span class="item-name ">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link "
                    href="app/user-add.html" data-sidebar-parent="users">
                    <i class="icon">
                        <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon" data-tp-toggle="tooltip" data-tp-title="Add User"
                        data-tp-placement="right"> A </i>
                    <span class="item-name ">Add User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link "
                    href="app/user-list.html" data-sidebar-parent="users">
                    <i class="icon">
                        <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon" data-tp-toggle="tooltip" data-tp-title="User List"
                        data-tp-placement="right"> U </i>
                    <span class="item-name ">User List</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item ">
        <a class="nav-link " aria-current="page"
            href="analytics.html">
            <i class="icon" data-tp-toggle="tooltip" data-tp-placement="left" data-tp-title="analytics">
                <svg width="20" height="20" class="icon-20" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10.1615 3.15833C10.1615 4.639 11.3636 5.83931 12.8464 5.83931C13.0097 5.83851 13.1726 5.82283 13.333 5.79248V11.1076C13.333 13.3437 12.014 14.6666 9.77463 14.6666H4.89725C2.65201 14.6666 1.33301 13.3437 1.33301 11.1076V6.23736C1.33301 4.00126 2.65201 2.66663 4.89725 2.66663H10.2084C10.1769 2.82863 10.1612 2.9933 10.1615 3.15833ZM8.76632 9.93102L10.6716 7.47248V7.46077C10.8347 7.2416 10.793 6.93255 10.5778 6.76419C10.4736 6.68375 10.3411 6.64893 10.2108 6.66768C10.0804 6.68644 9.96324 6.75716 9.88601 6.8637L8.27976 8.93004L6.45074 7.49004C6.34632 7.40869 6.21348 7.37277 6.08221 7.39039C5.95095 7.40802 5.83233 7.47769 5.75313 7.5837L3.78342 10.1242C3.71419 10.2105 3.67691 10.318 3.6779 10.4286C3.66647 10.6521 3.80759 10.855 4.02126 10.9225C4.23493 10.9899 4.46726 10.9048 4.58655 10.7154L6.23384 8.58467L8.06286 10.0188C8.16689 10.1027 8.3006 10.1407 8.43327 10.1242C8.56594 10.1076 8.68617 10.0379 8.76632 9.93102Z"
                        fill="currentColor"></path>
                    <ellipse opacity="0.4" cx="12.9997" cy="2.99998" rx="1.66667" ry="1.66667" fill="currentColor">
                    </ellipse>
                </svg>
            </i>
            <span class="item-name">Analytics</span>
        </a>
    </li>
  </ul>    
</div>