#include <iostream>
#include <Locale.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main()
{
	char mensagem [50];
	
	printf ("Entre com uma mensagem: ");
	gets (mensagem);
	
	printf ("A mensagem digitada e: %s" ,mensagem);
	
	return 0;
}
