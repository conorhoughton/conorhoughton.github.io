#include <iostream>	
#include <fstream>	
#include <ctime>
#include <cstdlib>
#include <string>
#include <vector>

using namespace std;




int main()
{
  ifstream file("Example.txt");
  
  if(file == NULL)
    {
      cout << "Example.txt not found..." << endl;
      exit(1);
    }
  
  vector<string> words;

  cout<<"The unrobust programme estimates probability densities for X, the first letter of a word, and Y, the last letter, in natural text; it uses as a sample corpus the file Example.txt which should be placed in the same directory."<<endl;

  cout<<"X=?; as a lower case letter: ";

  char x;
  
  cin>>x;
 


  cout<<"Y=?; as a lower case letter: ";

  char y;
  
  cin>>y;



  while(!file.eof())
    {
      string word;
      file >> word;
      words.push_back(word);
    }

  int n=words.size();

  double n_i=0;
  double n_e=0;

  double n_ie=0;

  for(unsigned int i=0;i<words.size() ;++i)
    {
      if(words.at(i)[0]==x)
	n_i++;
      if(words.at(i)[words.at(i).length()-1]==y)
	n_e++;
      if(words.at(i)[words.at(i).length()-1]==y&&words.at(i)[0]==x)
	n_ie++;
    }

  cout<<"p_X("<<x<<")="<<n_i/n<<endl;

  cout<<"p_Y("<<y<<")="<<n_e/n<<endl;

  cout<<"p_(X,Y)("<<x<<","<<y<<")"<<n_ie/n<<endl;

  cout<<"p_X("<<x<<")p_Y("<<y<<")="<<(n_e*n_i)/(n*n)<<endl;

  cout<<"p_(Y|X)("<<y<<"|"<<x<<")"<<n_ie/n_i<<endl;

}

