<?php
        //Function used to create navigation menu
        function displayNavigation(array $menu)
        {
                $htmlMenu = "<ul class='flex items-center'>";
                
                foreach ($menu as $name => $link)
                {
                        $htmlMenu .= "<li><a href='$link' class='p-3'>$name</a></li>";
                }

                $htmlMenu .= "</ul>";
                return $htmlMenu;
        }