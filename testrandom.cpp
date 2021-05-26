#include<cstdlib>
#include <iostream>
#include <sys/time.h>
using namespace std;
int main(){
	srand(1991);
	cout<<"random"<<endl;
	for(int i=0;i<1000;i++)
		cout<<rand()<<endl;
	return 0;
}
