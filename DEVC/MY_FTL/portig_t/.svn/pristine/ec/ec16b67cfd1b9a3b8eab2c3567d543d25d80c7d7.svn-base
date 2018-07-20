/*
** system_repair.c for system_repair in /home/tiphanys/piscine_C/My_FTL/portig_t
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Tue Nov  7 04:09:14 2017 PORTIGLIATTI Tiphanys
** Last update Thu Nov  9 12:25:55 2017 PORTIGLIATTI Tiphanys
*/
#include "ftl.h"
#include <stdlib.h>
#include <stdio.h>

static const t_repair_command u_repair[] =
  {
    {"ftl_drive", ftl_drive_system_repair},
    {"navigation_tools", navigation_tools_system_repair},
    {"weapon", weapon_system_repair},
    {NULL, NULL},
  };
  
void	ftl_drive_system_repair(t_ship *ship)
{
  my_putstr_color("cyan", "repair reactor in progress...\n");
  free(ship->drive->system_state);
  ship->drive->system_state = my_strdup("online");
  if (my_strcmp(ship->drive->system_state, "online") == 0)
    my_putstr_color("cyan", "repair ends! reactor system OK!\n");
  else
    my_putstr_color("green", "the repairs of reactor failed\n");
}

void	navigation_tools_system_repair(t_ship *ship)
{
  my_putstr_color("cyan", "repair navigation system in progress...\n");
  free(ship->tools->system_state);
  ship->tools->system_state = my_strdup("online");
  if (my_strcmp(ship->tools->system_state, "online") == 0)
    my_putstr_color("cyan", "repair ends! navigation system OK!\n");
  else
    my_putstr_color("green", "the repairs of navigation system failed\n");
}

void	weapon_system_repair(t_ship *ship)
{
  my_putstr_color("cyan", "repair weapon navigation in progress...\n");
  free(ship->weapon->system_state);
  ship->weapon->system_state = my_strdup("online");
  if (my_strcmp(ship->weapon->system_state, "online") == 0)
    my_putstr_color("cyan", "repair ends! weapon system OK!\n");
  else
    my_putstr_color("green", "the repairs of weapon system failed\n");
}

void	system_repair(t_ship *ship)
{
  char	*line;

  line = NULL;
  while (line == NULL) {
    my_putstr("repair_system~>");
    line = readline();
    if (line == NULL) {
      my_putstr_color("red", "[SYSTEM FAILURE]: command reader is blocked\n");
      return;
    }
    else {
      if (my_strcmp(line, u_repair[0].command) == 0)
	u_repair[0].f(ship);
      else if (my_strcmp(line, u_repair[1].command) == 0)
	u_repair[1].f(ship);
      else if (my_strcmp(line, u_repair[2].command) == 0)
	u_repair[2].f(ship);
      else {
	my_putstr_color("red", "[SYSTEM FAILURE]: unknown order\n");
	line = NULL;
      }
    }
  }
}
