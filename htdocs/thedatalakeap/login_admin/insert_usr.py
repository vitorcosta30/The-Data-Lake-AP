#!\Python27\python.exe
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="thedatalakeap"
)
def signup():
    cur = g.db.cursor()
    id_user = request.form['id']
    password = sha1(request.form['pass'])
    cur.execute("INSERT INTO users (usr_id, password) VALUES (?, ?)", [id_user, password])
    #cur.execute("""SELECT email,username FROM users WHERE email=? OR username=?""",(email, username))
    result = cur.fetchone()
  
    if result:

        return redirect('/')
 

    else:
        cur.execute("INSERT INTO users VALUES (?, ?, ?)", [email, username, password])
        g.db.commit()
        return redirect('/')
mydb.close()