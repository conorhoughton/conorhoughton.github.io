#include <iostream>	
#include <fstream>	
#include <ctime>
#include <cstdlib>
#include <string>
#include <vector>
#include <cmath>

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

  cout<<"The unrobust programme estimates probability densities for different characters and calculates the entropy, in natural text; it uses as a sample corpus the file Example.txt which should be placed in the same directory."<<endl;


  vector<int> letters(27,0);

  while(!file.eof())
    {
      string word;
      file >> word;
      words.push_back(word);
    }

  letters.at(0)=words.size();

  for(unsigned int i=0;i<words.size() ;++i)
    for(unsigned int j=0;j<words.at(i).length() ;++j)
      letters.at(words.at(i)[j]-96)++;

  int n=0;
  
  for(unsigned int i=0;i<letters.size() ;++i)
    n+=letters.at(i);

  cout<<"p( )="<<double(letters.at(0))/n<<endl;
  for(unsigned int i=1;i<letters.size() ;++i)
    cout<<"p("<<char(i+96)<<")="<<double(letters.at(i))/n<<endl;


  double h=0;

  for(unsigned int i=0;i<letters.size();++i)
    {
      double p=double(letters.at(i))/n;
      h+=-p*log(p);
    }

  h/=log(2);

  cout<<"H="<<h<<endl;

  cout<<"log(27)="<<log(27)/log(2)<<endl;

}

