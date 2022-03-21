dict = {
    "第一筆加一":"plus1",
    "第二筆加一":"plus2",
    "第三筆加一":"plus3",
    "第一筆減一":"delete1",
    "第二筆減一":"delete2",
    "第三筆減一":"delete3"
}

Text = "第三筆加一"
if (Text == value for key, value in dict.items()): # 如果 Text == value 
    print(dict[Text])

