<h1>Users</h1>

{{ content() }}
{% for user in users %}
*Name:{{ user.getIdentite() }}
{% endfor %}