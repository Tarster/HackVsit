#include <Ultrasonic.h>                   // import ultrasonic library

Ultrasonic ultrasonic(10,9);               // Register ultrasonic sensor with interface pins trig:2, echo:3
Ultrasonic ultrasonic2(2,3);

#define senyellow1 5
#define senyellow2 7
#define sengreen 4
#define senred 6

void setup() 
{

  pinMode(senyellow1,OUTPUT);
  pinMode(senyellow2,OUTPUT);
  pinMode(sengreen,OUTPUT);
  pinMode(senred,OUTPUT);
  pinMode(12,OUTPUT);
  digitalWrite(12,HIGH);
  Serial.begin(9600);
    
}

void loop() {

  //Sensor 1
  int check = ultrasonic.distanceRead();
  Serial.println(check);
  if(check <= 75)
  { 
    //Serial.print("Dustbin is filled Less than 50%");
    digitalWrite(sengreen,LOW);
    digitalWrite(senyellow1,LOW);
    }

   else if (check >= 120)
   {
    digitalWrite(sengreen,HIGH);
    digitalWrite(senyellow1,LOW);
    }
   else
   {
    digitalWrite(sengreen,LOW);
    digitalWrite(senyellow1,HIGH);
    } 

  //Sensor 2
    
  int check2 = ultrasonic2.distanceRead();
  Serial.println(check2);
  if(check2 <= 75)
  { 
    //Serial.print("Dustbin is filled Less than 50%");
    digitalWrite(senred,LOW);
    digitalWrite(senyellow2,LOW);
    }

   else if (check2 >= 120)
   {
    digitalWrite(senred,HIGH);
    digitalWrite(senyellow2,LOW);
    }
   else
   {
    digitalWrite(senred,LOW);
    digitalWrite(senyellow2,HIGH);
    } 
    
  
  
  delay(5000);                                  // waits half a second

}
