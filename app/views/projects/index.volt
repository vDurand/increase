<h2>Mes projets</h2>

{{ content() }}
<table>
{% for project in projects %}
    <tr>
    <td style="width: 10%;">{{ project.getNom() }}</td>
    <td style="width: 40%;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="{{ project.getAvancement() }}" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: {{ project.getAvancement() }}%;">
                {{ project.getAvancement() }}%
            </div>
        </div>
    </td>
    <td style="width: 10%;">reste {{ project.getDayLeft() }}</td>
    <td style="width: 10%;">oucrir</td>
    <br>
    </tr>
{% endfor %}
</table>