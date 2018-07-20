/*
** ftl.h for ftl in /home/tiphanys/piscine_C/My_FTL/portig_t
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Mon Nov  6 09:27:36 2017 PORTIGLIATTI Tiphanys
** Last update Thu Nov  9 13:26:06 2017 PORTIGLIATTI Tiphanys
*/

#ifndef			_FTL_H_
#define			_FTL_H_

typedef struct		s_freight
{
  char			*item;
  struct s_freight	*next;
  struct s_freight	*prev;
}			t_freight;

typedef struct		s_container
{
  t_freight		*first;
  t_freight		*last;
  int			nb_elem;
}			t_container;

typedef struct		s_navigation_tools
{
  char			*system_state;
  int			sector;
  int			evade;
}			t_navigation_tools;
  
typedef struct		s_ftl_drive
{
  char			*system_state;
  int			energy;
}			t_ftl_drive;

typedef struct		s_weapon
{
  char			*system_state;
  int			damage;
}			t_weapon;

typedef struct		s_ship
{
  int			hull;
  t_weapon		*weapon;
  t_ftl_drive		*drive;
  t_navigation_tools	*tools;
  t_container		*container;
}			t_ship;

typedef struct		s_repair_command
{
  char			*command;
  void			(*f)(t_ship *ship);
}			t_repair_command;

t_ship			*create_ship();
char			*my_strdup(const char *str);
char			*readline();
void			show_menu();
void			my_putchar(const char c);
void			my_putstr(const char *str);
void			add_freight_to_container(t_ship *ship,
						 t_freight *freight);
void			get_bonus(t_ship *ship);
void			system_control(t_ship *ship);
void			ftl_drive_system_repair(t_ship *ship);
void			navigation_tools_system_repair(t_ship *ship);
void			weapon_system_repair(t_ship *ship);
void			system_repair(t_ship *ship);
void			my_put_nbr(int n);
void			show_stat(t_ship *ship);
void			my_putstr_color(const char *color, const char *str);
int			select_option(t_ship *ship);
int			select_option_second(t_ship *ship, char *line);
int			jump(t_ship *ship);
int			my_strcmp(const char *s1, const char *s2);
int			add_container_to_ship(t_ship *ship);
int			add_navigation_tools_to_ship(t_ship *ship);
int			add_ftl_drive_to_ship(t_ship *ship);
int			add_weapon_to_ship(t_ship *ship);

#endif			/* !_FTL_H_ */
