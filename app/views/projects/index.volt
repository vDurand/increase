<h2>Mes projets</h2>

{{ content() }}
{% set i=0 %}
<table>
{% for project in projects %}
    <tr>
    <td style="width: 10%;">{{ project.getNom() }}</td>
    <td style="width: 40%;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="{{ avancement[i] }}" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: {{ avancement[i] }}%;">
                {{ avancement[i] }}%
            </div>
        </div>
    </td>
    <td style="width: 10%;">reste</td>
    <td style="width: 10%;">oucrir</td>
    <br>
    {% set i+=1 %}
    </tr>
{% endfor %}
</table>