#include <LiquidCrystal_I2C.h>
#include <MFRC522.h>
#include <SPI.h>
#include <Servo.h>
#include <Wire.h>

int nbr_Places_vides = 6, pos = 110, disponibilite=1;
bool INP = false; // INP = incrementerNbrplaces
bool DNP = false; // DNP = decrementerNbrplaces

LiquidCrystal_I2C lcd(0x27, 16, 2);
MFRC522 mfrc522(10, 9);
Servo serv;

void setup() {
  Serial.begin(9600);
  lcd.begin();
  pinMode(A0, INPUT);
  pinMode(A1, INPUT);
  pinMode(2, INPUT);
  pinMode(3, INPUT);
  pinMode(4, INPUT);
  pinMode(5, INPUT);
  pinMode(6, INPUT);
  pinMode(7, INPUT);
  SPI.begin();
  mfrc522.PCD_Init();
  serv.attach(8);
  serv.write(pos);
}

void loop() {
  lcd.setCursor (0,0);
  lcd.print("Put your card");
  lcd.setCursor (0,1);
   lcd.print("Nbr Places Vd");
   lcd.setCursor (15,1);
   lcd.print(nbr_Places_vides);

  if (digitalRead(A1) == LOW && !DNP && nbr_Places_vides>0) {
    nbr_Places_vides -= 1;
    DNP = true;
  } else if (digitalRead(A1) == HIGH && DNP) {
    DNP = false;
  }
  
  if (digitalRead(A0) == LOW && !INP && nbr_Places_vides<4) {
    nbr_Places_vides += 1;
    INP = true;
  }
   else if (digitalRead(A0) == HIGH && INP) {
    INP = false;
  }


  if (mfrc522.PICC_IsNewCardPresent() && mfrc522.PICC_ReadCardSerial()) {
    String tag = "";
    byte letter;
    for (byte i = 0; i < mfrc522.uid.size; i++) {
      tag.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? "0" : ""));
      tag.concat(String(mfrc522.uid.uidByte[i], HEX));
      if (i < mfrc522.uid.size - 1) {
        tag.concat(" ");
      }
    }
    Serial.print("{\"tag\":\"");
    Serial.print(tag);
    Serial.print("\"}");
    Serial.println();

    if (Serial.available()) {
      String data = Serial.readString();
      int result = data.startsWith("n");
      if (strstr(data.c_str(), "true") != NULL && nbr_Places_vides > 0) {
        lcd.clear();
        lcd.print("Allowed Access");
        serv.write(0);
        delay(2000);
        serv.write(pos);
        lcd.clear();
      } else if (strstr(data.c_str(), "true") != NULL && nbr_Places_vides == 0){
         lcd.clear();
        lcd.print("Allowed Access");
        lcd.setCursor(0,1);
        lcd.print("But Parking full");
        delay(1000);
        lcd.clear();
      }
      else{
        lcd.clear();
        lcd.print("Access Denied");
        delay(1000);
        lcd.clear();
      }
    }
  }
    places_state();
}

void places_state() {
  for (int i=2 ; i<=7 ; i++){
    if(digitalRead(i) == LOW){
      disponibilite = 0;
    Serial.print("{\"disponibilite\":");
    Serial.print(disponibilite);
    Serial.print(",\"id\":");
    Serial.print((i-1));
    Serial.println("}");
  }else if(digitalRead(i) == HIGH){
    disponibilite = 1;
    Serial.print("{\"disponibilite\":");
    Serial.print(disponibilite);
    Serial.print(",\"id\":");
    Serial.print((i-1));
    Serial.println("}");
  }
}
}
