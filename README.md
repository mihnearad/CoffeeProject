# CoffeeProject
 
The CoffeeProject started as I wanted a way to quantify my skills in making good espresso. I wanted to measure and capture the variables that go into making good coffee and try to make some sense of the numbers. 

So, I've created a local webapge that pushes each variable into a local database. Both the webpage and the SQL Database are stored on the same VM on my Proxmox home server. 

Workflow: 
 
1. Load webpage into phone
2. Start making coffee and stard recording variables
3. When done, publish to DB 
4. From time to time check PowerBi dashboard to check results.
