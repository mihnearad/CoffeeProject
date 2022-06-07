# CoffeeProject
 
The CoffeeProject started as I wanted a way to quantify my skills in making good espresso. I wanted to measure and capture the variables that go into making good coffee and try to make some sense of the numbers. 

So, I've created a local webapge that pushes each variable into a local database. Both the webpage and the SQL Database are stored on the same VM. 

Workflow: 

1. Run automation that turns on the coffee machine via Philips Hue Smart plug
2. Same automation starts up the PC via WOL packets. 
3. Load webpage into phone
4. Start making coffee and stard recording variables
5. When done, publish to DB
