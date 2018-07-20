/*
** system_control.c for system_control in /home/tiphanys/piscine_C/My_FTL/portig_t
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Tue Nov  7 03:09:12 2017 PORTIGLIATTI Tiphanys
** Last update Thu Nov  9 12:24:56 2017 PORTIGLIATTI Tiphanys
*/

#include "ftl.h"
#include <stdlib.h>

void	ftl_drive_system_check(t_ship *ship)
{
  my_putstr_color("cyan", "reactor verification in progress...\n");
  if (my_strcmp(ship->drive->system_state, "online") == 0)
    my_putstr_color("cyan", "reactor OK!\n");
  else
    my_putstr_color("green", "reactor out of service!\n");
}

void   	navigation_tools_system_check(t_ship *ship)
{ 
  my_putstr_color("cyan", "verification of the navigation system in progress...\n");
  if(my_strcmp(ship->tools->system_state, "online") == 0)
    my_putstr_color("cyan", "navigation system OK!\n");
  else
    my_putstr_color("green", "navigation system out of service!\n");
}

void   	weapon_system_check(t_ship *ship)
{ 
  my_putstr_color("cyan", "verification of weapon system en progress...\n");
  if(my_strcmp(ship->weapon->system_state, "online") == 0)
    my_putstr_color("cyan", "weapon system OK!\n");
  else
    my_putstr_color("green", "weapon system out of service!\n");
}

void   	system_control(t_ship *ship)
{
  ftl_drive_system_check(ship);
  navigation_tools_system_check(ship);
  weapon_system_check(ship);
}
