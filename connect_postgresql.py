import psycopg

# Connection details
host = "10.126.98.13"
dbname = "wms"
user = "wms_user"
password = "2HviB7A%R0"

# Establish connection
try:
    with psycopg.connect(host=host, dbname=dbname, user=user, password=password) as conn:
        with conn.cursor() as cur:
            # Simple query example: get PostgreSQL version
            cur.execute("SELECT version();")
            version = cur.fetchone()
            print("PostgreSQL version:", version[0])
except Exception as e:
    print("Error connecting to database:", e)
