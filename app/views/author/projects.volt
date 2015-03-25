<h2>Mes projets</h2>
<br>
{{ content() }}
{% for project in projects %}
    <div class="row">
        <div class="col-md-2">{{ project.getNom() }}</div>
        <div class="col-md-6">
            <div class="progress">
                <div class="progress-bar progress-bar-{{ project.getLateState() }} progress-bar-striped" role="progressbar" aria-valuenow="{{ project.getAvancement() }}" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: {{ project.getAvancement() }}%;">
                    {{ project.getAvancement() }}%
                </div>
            </div>
        </div>
        <div class="col-md-2">reste {{ project.getDayLeft() }} jours</div>
        <div class="col-md-2">
            <div class="btn-group" role="group">
                <a class="btn btn-default">Afficher</a>
            </div>
        </div>
    </div>
    <br>
    </tr>
{% endfor %}