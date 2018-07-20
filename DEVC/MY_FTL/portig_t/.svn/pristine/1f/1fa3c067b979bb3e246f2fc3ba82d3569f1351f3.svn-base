/*
** main.c for main in /home/tiphanys/piscine_C/My_FTL/portig_t
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Mon Nov  6 13:14:55 2017 PORTIGLIATTI Tiphanys
** Last update Fri Nov 10 23:37:35 2017 PORTIGLIATTI Tiphanys
*/
#include "ftl.h"
#include <stdlib.h>
#include <stdio.h>

int		main()
{
  t_ship	*ship;
  int		i;
  
  i = 0;
  my_putstr_color("magenta", "Hi Captain Morpheus, I'm Jena your dashboard\n");
  my_putstr_color("magenta", "Welcome to the Nebuchadnezzar\n");
  my_putstr("\n");
  ship = create_ship();
  add_weapon_to_ship(ship);
  add_ftl_drive_to_ship(ship);
  add_navigation_tools_to_ship(ship);
  add_container_to_ship(ship);
  my_putstr("\n");
  while (i == 0)
    {
      show_menu();
     i = select_option(ship);
     my_putstr("\n");
    }
  return (0);
}
