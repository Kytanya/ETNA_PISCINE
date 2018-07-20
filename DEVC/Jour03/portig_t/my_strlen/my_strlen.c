/*
** my_strlen.c for my_strlen in /home/tiphanys/piscine_C/jour03/portig_t/my_strlen
** 
** Made by PORTIGLIATTI Tiphanys
** Login   <portig_t@etna-alternance.net>
** 
** Started on  Wed Oct 18 09:21:12 2017 PORTIGLIATTI Tiphanys
** Last update Wed Oct 18 16:55:32 2017 PORTIGLIATTI Tiphanys
*/

int	my_strlen(char *str)
  
{
  int	len;
   
  len = 0;
  while (str[len] != '\0')
    {
      len++;
    }
  return len;
}
