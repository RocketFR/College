#include <stdio.h>
int main(){
	 int a = 1; 
        float acumulador = 0;
        float altura = 0;
          
        while (a <= 5 ){       
            printf("Digite a altura da pessoa\n");
            scanf ("%f", &altura); 
            acumulador+=altura;
            a++;
            
        }   
        
       
        
        float media = acumulador/2;
        
        printf("\n%f", media);  
}
