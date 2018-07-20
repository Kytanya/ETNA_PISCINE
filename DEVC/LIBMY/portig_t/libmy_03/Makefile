
##
## Makefile for Makefile in /home/tiphanys/piscine_C/Libmy/portig_t
## 
## Made by PORTIGLIATTI Tiphanys
## Login   <portig_t@etna-alternance.net>
## 
## Started on  Sat Oct 21 12:40:08 2017 PORTIGLIATTI Tiphanys
## Last update Wed Oct 25 00:58:36 2017 PORTIGLIATTI Tiphanys
##

CC	= gcc

NAME	=  libmy.a

SRC	=  my_putchar.c \
	   my_isneg.c \
	   my_put_nbr.c \
	   my_swap.c \
	   my_putstr.c \
	   my_strlen.c \
	   my_getnbr.c \
	   my_strcpy.c \
	   my_strncpy.c \
	   my_strcmp.c \
	   my_strncmp.c \
	   my_strcat.c \
	   my_strncat.c \
	   my_strstr.c \
	   my_strdup.c \
	   my_str_to_wordtab.c

OBJ	=  $(SRC:%.c=%.o)

CFLAGS	=  -Wall -Werror -W

LFLAGS	=  -lmy

RM	=  rm -f

AR	=  ar r

$(NAME):	$(OBJ)
		$(AR) $(NAME) $(OBJ)

all:		$(NAME)

clean:
		$(RM) $(OBJ)

fclean:		clean
		$(RM) $(NAME)

.PHONY:		all clean fclean

re:		fclean all
