from selenium import webdriver
from selenium.webdriver.common.by import By
import selenium.webdriver.support.ui as ui
import time
from many_Function import Voice_To_Text
import os
import pyaudio

def shoppingCart():
    # dict = {
    # "第一筆加1":"plus1",
    # "第二筆加1":"plus2",
    # "第三筆加1":"plus3",
    # "第四筆加1":"plus4",
    # "第五筆加1":"plus5",
    # "第六筆加1":"plus6",
    # "第七筆加1":"plus7",
    # "第八筆加1":"plus8",
    # "第九筆加1":"plus9",
    # "第十筆加1":"plus10",
    # "第一筆減1":"delete1",
    # "第二筆減1":"delete2",
    # "第三筆減1":"delete3",
    # "第四筆減1":"delete4",
    # "第五筆減1":"delete5",
    # "第六筆減1":"delete6",
    # "第七筆減1":"delete7",
    # "第八筆減1":"delete8",
    # "第九筆減1":"delete9",
    # "第十筆減1":"delete10",
    # }
    while(1):
            Text = Voice_To_Text()
            if(Text == "繼續點餐"):
                button = driver.find_element_by_link_text('繼續點餐')
                button.click()
                time.sleep(1)
                combo()
            elif(Text == "付款"):
                button = driver.find_element_by_xpath("//button[@id='enter']")
                button.click()
            elif( Text == "離開"):
                break
            elif(Text == "第一筆加1"):
                button = driver.find_element_by_id('plus1')
                button.click()
            elif(Text == "第二筆加1"):
                button = driver.find_element_by_id('plus2')
                button.click()
            elif(Text == "第三筆加1"):
                button = driver.find_element_by_id('plus3')
                button.click()
            elif(Text == "第四筆加1"):
                button = driver.find_element_by_id('plus4')
                button.click()  
            elif(Text == "第五筆加1"):
                button = driver.find_element_by_id('plus5')
                button.click()
            elif(Text == "第一筆減1"):
                button = driver.find_element_by_id('delete1')
                button.click()
            elif(Text == "第二筆減1"):
                button = driver.find_element_by_id('delete2')
                button.click()
            elif(Text == "第三筆減1"):
                button = driver.find_element_by_id('delete3')
                button.click()
            elif(Text == "第四筆減1"):
                button = driver.find_element_by_id('delete4')
                button.click()
            elif(Text == "第五筆減1"):
                button = driver.find_element_by_id('delete5')
                button.click()
            else:
                print("請重新說一次")

def order():
    while(1):
        Text = Voice_To_Text()
        if ( Text == "加一"):
            button = driver.find_element_by_id('PlusOne')
            button.click()
            time.sleep(1)
        elif(Text == "減一"):
            button = driver.find_element_by_id('MinusOne')
            button.click()
            time.sleep(1)
        elif(Text == "確認"):
            button = driver.find_element_by_xpath("//input[@id='enter']")
            button.click()
            shoppingCart()
        elif( Text == "離開"):
            break
        else:
            print("請重新說一次")


def combo_3():
    while(1):
        Text = Voice_To_Text()
        if ( Text == "麥脆雞腿分享盒"):
            button = driver.find_element_by_link_text('麥脆鷄腿分享盒(6塊)')
            button.click()
            time.sleep(1)
            order()
        elif(Text == "勁辣香雞翅分享盒"):
            button = driver.find_element_by_link_text('勁辣香鷄翅分享盒')
            button.click()
            time.sleep(1)
            order()
        elif(Text == "酥嫩雞翅分享盒"):
            button = driver.find_element_by_link_text('酥嫩鷄翅分享盒')
            button.click()
            time.sleep(1)
            order()
        elif( Text == "離開"):
            break
        else:
            print("請重新說一次")


def combo_2():
    while(1):
        Text = Voice_To_Text()
        if ( Text == "蘋果派"):
            button = driver.find_element_by_link_text('蘋果派')
            button.click()
            time.sleep(1)
            order()
        elif(Text == "玉米濃湯"):
            button = driver.find_element_by_link_text('玉米濃湯')
            button.click()
            time.sleep(1)
            order()
        elif(Text == "冰炫風"):
            button = driver.find_element_by_link_text('冰炫風')
            button.click()
            time.sleep(1)
            order()
        elif(Text == "麥脆雞腿"):
            button = driver.find_element_by_link_text('麥脆雞腿')
            button.click()
            time.sleep(1)
            order()
        elif(Text == "麥克雞塊"):
            button = driver.find_element_by_link_text('麥克鷄塊(4塊)')
            button.click()
            time.sleep(1)
            order()
        elif( Text == "離開"):
            break
        else:
            print("請重新說一次")

def EVM_SET():
    while(1):
        Text = Voice_To_Text()
        if ( Text == "薯條飲料"):
            button = driver.find_element_by_link_text('薯條_飲料')
            button.click()
            time.sleep(1)
            order()
        elif(Text == "沙拉飲料"):
            button = driver.find_element_by_link_text('沙拉_飲料')
            button.click()
            time.sleep(1)
            order()
        elif(Text == "炸雞飲料"):
            button = driver.find_element_by_link_text('炸雞_飲料')
            button.click()
            time.sleep(1)
            order()
        elif( Text == "離開"):
            break
        else:
            print("請重新說一次")


def combo_1():
    while(1):
        Text = Voice_To_Text()
        if ( Text == "大麥克"):
            button = driver.find_element_by_link_text('大麥克')
            button.click()
            time.sleep(1)
            EVM_SET()
        elif(Text == "雙層牛肉吉士堡"):
            button = driver.find_element_by_link_text('雙層牛肉吉士堡')
            button.click()
            time.sleep(1)
            EVM_SET()
        elif(Text == "嫩煎雞腿堡"):
            button = driver.find_element_by_link_text('嫩煎鷄腿堡')
            button.click()
            time.sleep(1)
            EVM_SET()
        elif(Text == "麥香雞"):
            button = driver.find_element_by_link_text('麥香鷄')
            button.click()
            time.sleep(1)
            EVM_SET()
        elif(Text == "麥克雞塊"):
            button = driver.find_element_by_link_text('麥克鷄塊(6塊)')
            button.click()
            time.sleep(1)
            EVM_SET()
        elif(Text == "勁辣雞腿堡"):
            button = driver.find_element_by_link_text('勁辣鷄腿堡')
            button.click()
            time.sleep(1)
            EVM_SET()
        elif(Text == "辣味麥脆雞腿"):
            button = driver.find_element_by_link_text('辣味麥脆鷄腿(2塊)')
            button.click()
            time.sleep(1)
            EVM_SET()
        elif(Text == "辣味麥脆雞翅"):
            button = driver.find_element_by_link_text('辣味麥脆鷄翅(2塊)')
            button.click()
            time.sleep(1)
            EVM_SET()
        elif( Text == "離開"):
            break
        else:
            print("請重新說一次")

def combo():
    while(1):
        Text = Voice_To_Text()
        if ( Text == "套餐"):
            button = driver.find_element_by_link_text('套餐')
            button.click()
            time.sleep(1)
            combo_1()
        elif(Text == "點心"):
            button = driver.find_element_by_link_text('點心')
            button.click()
            time.sleep(1)
            combo_2()
        elif(Text == "分享餐"):
            button = driver.find_element_by_link_text('分享餐')
            button.click()
            time.sleep(1)
            combo_3()
        elif( Text == "離開"):
            break
        else:
            print("請重新說一次") 


if __name__ == '__main__':
    while(1):
        ##讓我們實際利用看看吧~
        print("請說\"麥當勞\":")
        Text = Voice_To_Text()
        # print(f"您的點餐為:{Text}")
        if ( Text == "麥當勞"):
            #開啟的網站
            url = 'https://shoparoundnet.com/MCD1/templates/index.php'
            #建立瀏覽器物件
            driver = webdriver.Chrome("C:/Users/Administrator/Desktop/first/chromedriver.exe")
            # driver = webdriver.Edge()
            #最大化視窗
            driver.maximize_window()
            #開啟網頁
            driver.get(url)
            time.sleep(1)
            while(1):
                Text = Voice_To_Text()
                if ( Text == "繼續點餐"):
                    button = driver.find_element_by_link_text('')
                    button.click()
                    time.sleep(1)
                    combo()                  
                elif( Text == "離開"):
                    break
                else:
                    print("請重新說一次")
        elif( Text == "離開"):
            break
        else:
            print("請重新說一次")
    

# from gtts import gTTS
# from playsound import playsound
# tts=gTTS(text= f'您的點餐為:{Text}。正確，請按一，錯誤，請按2', lang='zh')
# tts.save('sample.mp3')
# playsound('sample.mp3')