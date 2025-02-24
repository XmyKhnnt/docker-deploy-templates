# Use the official NGINX image as a base image
FROM nginx:stable-alpine

# Copy the built Vue.js app to NGINX's HTML directory
COPY vue-test-app/dist /usr/share/nginx/html

# Copy a custom NGINX configuration file (optional)
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Expose port 80 for HTTP traffic
EXPOSE 8002

# Start NGINX
CMD ["nginx", "-g", "daemon off;"]