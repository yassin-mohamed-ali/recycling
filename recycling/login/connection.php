<?php
import mysql.connector

# Database connection configuration
config = {
    'host': 'local host ',
    'user': 'user',
    'password': 'pass',
    'database': 'login',
    'port': 3306,
}

# Connect to the database
try:
    connection = mysql.connector.connect(**config)
    cursor = connection.cursor()

    # Example query
    query = "SELECT * FROM your_table;"
    cursor.execute(query)

    # Fetch and print results
    results = cursor.fetchall()
    for row in results:
        print(row)

except mysql.connector.Error as err:
    print(f"Error: {err}")

finally:
    # Close the connection
    if connection.is_connected():
        cursor.close()
        connection.close()
        print("Connection closed.")

        # main_script.py

from database_connection import DatabaseConnection

# Database connection configuration
config = {
    'host': 'local host',
    'user': 'user',
    'password': 'pass',
    'database': 'login',
    'port': 3306,
}

# Create a DatabaseConnection object named conn
conn = DatabaseConnection(config)

# Connect to the database
conn.connect()

# Example query execution
create_table_query = """
CREATE TABLE IF NOT EXISTS your_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
"""
conn.execute_query(create_table_query)

# Perform other database operations...

# Disconnect from the database
conn.disconnect()

?>

