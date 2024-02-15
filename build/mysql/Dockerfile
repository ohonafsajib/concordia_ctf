FROM mysql:latest

# Switch to root user to perform operations
USER root

# Copy the SQL initialization script into the container
COPY ./dump.sql /docker-entrypoint-initdb.d/

# Set executable permission for the SQL initialization script
RUN chmod +x /docker-entrypoint-initdb.d/dump.sql

# Set permissions for the MySQL data directory
RUN chmod 755 /var/lib/mysql

# Run the initialization script when the container starts
CMD ["--init-file=/docker-entrypoint-initdb.d/dump.sql"]