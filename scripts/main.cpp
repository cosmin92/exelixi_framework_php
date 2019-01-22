#include <iostream>
#include <stdio.h>

#define WINDOWS  

#ifdef WINDOWS
	#include <direct.h>
	#define GetCurrentDir _getcwd
#else
	#include <unistd.h>
	#define GetCurrentDir getcwd
#endif

using namespace std;

std::string getCurrentDirectory(void) {
	char buff[FILENAME_MAX];
	GetCurrentDir( buff, FILENAME_MAX );
	std::string current_dir(buff);
	return current_dir;
}
 
int main(int argc, char *argv[]){
	if(argc < 3){
		cout<< "You ase the folowing sintax:"<<endl;
		cout<<"\tgen [-m|-c|-s] {name} param1 param2 ..."<<endl;
		cout<<"Where:"<<endl;
		cout<<"	-m: create a model with name {name} and attributes param1, param2, ..."<<endl;
		cout<<"	-c: create a controller with name {name} and views param1, param2, ..."<<endl;
		cout<<"	-s: create a controller with name {name}+s, a model with name {name} and views param1, param2, ..."<<endl;
		return 1;
	}
	
	if()
	
	return 1;
}

void generate(int choose){
	
}
