<aside id="menu">
    <div id="navigation">
        <ul class="nav" id="side-menu">
            <li class="<?php echo $pageName == 'Index' ? 'active' : '' ?>"><a href="index.php"><span class="nav-label">Dashboard</span></a></li>
            <li class="<?php echo $pageName == 'Analytics' ? 'active' : '' ?>"><a href="analytics.php"> <span class="nav-label">Analytics</span></a></li>
            <li>
                <a href="#"><span class="nav-label">Interface</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="<?php echo $pageName == 'Panels Design' ? 'active' : '' ?>"><a href="panels_design.php">Panels Design</a></li>
                    <li class="<?php echo $pageName == 'Typography' ? 'active' : '' ?>"><a href="typography.php">Typography</a></li>
                    <li class="<?php echo $pageName == 'Colors And Buttons' ? 'active' : '' ?>"><a href="colors_and_buttons.php">Colors &amp; Buttons</a></li>
                    <li class="<?php echo $pageName == 'Components' ? 'active' : '' ?>"><a href="components.php">Components</a></li>
                    <li class="<?php echo $pageName == 'Slider' ? 'active' : '' ?>"><a href="slider.php">Slider</a></li>
                    <li class="<?php echo $pageName == 'Alerts' ? 'active' : '' ?>"><a href="alerts.php">Alerts</a></li>
                    <li class="<?php echo $pageName == 'Modals' ? 'active' : '' ?>"><a href="modals.php">Modals</a></li>
                    <li class="<?php echo $pageName == 'Icons Library' ? 'active' : '' ?>"><a href="icons_library.php">Icons library</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">App Views</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="<?php echo $pageName == 'Projects' ? 'active' : '' ?>"><a href="projects.php">Projects</a></li>
                    <li class="<?php echo $pageName == 'Timeline' ? 'active' : '' ?>"><a href="timeline.php">Timeline</a></li>
                    <li class="<?php echo $pageName == 'Mailbox' ? 'active' : '' ?>"><a href="mailbox.php">Mailbox</a></li>
                    <li class="<?php echo $pageName == 'Mail Compose' ? 'active' : '' ?>"><a href="mail_compose.php">Mail Compose</a></li>
                    <li class="<?php echo $pageName == 'Mail View' ? 'active' : '' ?>"><a href="mail_view.php">Mail View</a></li>
                    <li class="<?php echo $pageName == 'File Manager' ? 'active' : '' ?>"><a href="file_manager.php">File Manager</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Charts</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="<?php echo $pageName == 'Chartjs' ? 'active' : '' ?>"><a href="chartjs.php">ChartJs</a></li>
                    <li class="<?php echo $pageName == 'Flot Charts' ? 'active' : '' ?>"><a href="flot_charts.php">Flot charts</a></li>
                    <li class="<?php echo $pageName == 'Inline Graphs' ? 'active' : '' ?>"><a href="inline_graphs.php">Inline Graphs</a></li>
                    <li class="<?php echo $pageName == 'Chartist' ? 'active' : '' ?>"><a href="chartist.php">Chartist</a></li>
                    <li class="<?php echo $pageName == 'C3 Charts' ? 'active' : '' ?>"><a href="c3_charts.php">C3 Charts</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Box Transitions</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="<?php echo $pageName == 'Overview' ? 'active' : '' ?>"><a href="overview.php">Overview</a></li>
                    <li class="<?php echo $pageName == 'Panels Zoom' ? 'active' : '' ?>"><a href="panels_zoom.php">Panels Zoom</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Common views</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="<?php echo $pageName == 'Login' ? 'active' : '' ?>"><a href="login.php">Login</a></li>
                    <li class="<?php echo $pageName == 'Register' ? 'active' : '' ?>"><a href="register.php">Register</a></li>
                    <li class="<?php echo $pageName == 'Guide' ? 'active' : '' ?>"><a href="guide.php">Guide</a></li>
                    <li class="<?php echo $pageName == 'Error 404' ? 'active' : '' ?>"><a href="error_404.php">Error 404</a></li>
                    <li class="<?php echo $pageName == 'Error 505' ? 'active' : '' ?>"><a href="error_505.php">Error 505</a></li>
                    <li class="<?php echo $pageName == 'Password Recovery' ? 'active' : '' ?>"><a href="password_recovery.php">Password recovery</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Tables</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="<?php echo $pageName == 'Tables Design' ? 'active' : '' ?>"><a href="tables_design.php">Tables design</a></li>
                    <li class="<?php echo $pageName == 'Data Tables' ? 'active' : '' ?>"><a href="data_tables.php">Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Forms</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li class="<?php echo $pageName == 'Forms Elements' ? 'active' : '' ?>"><a href="forms_elements.php">Forms elements</a></li>
                    <li class="<?php echo $pageName == 'Forms Extended' ? 'active' : '' ?>"><a href="forms_extended.php">Forms extended</a></li>
                    <li class="<?php echo $pageName == 'Text Editor' ? 'active' : '' ?>"><a href="text_editor.php">Text editor</a></li>
                    <li class="<?php echo $pageName == 'Wizard' ? 'active' : '' ?>"><a href="wizard.php">Wizard</a></li>
                    <li class="<?php echo $pageName == 'Validation' ? 'active' : '' ?>"><a href="validation.php">Validation</a></li>
                </ul>
            </li>
            <li class="<?php echo $pageName == 'Layout Options' ? 'active' : '' ?>"><a href="layout_options.php"><span class="nav-label">Layout options</span></a></li>
            <li class="<?php echo $pageName == 'Grid System' ? 'active' : '' ?>"><a href="grid_system.php"><span class="nav-label">Grid System</span></a></li>
        </ul>
    </div>
</aside>