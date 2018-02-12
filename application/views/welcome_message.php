<div class="col-lg-12">
    <div class="col-lg-2">
            <ul>
                {sets}
                <li>
                    <a href="/Welcome/set/{id}"> {name}</a>
                </li>
                {/sets}
            </ul>
    </div>


    <div class="col-lg-6 picture">
        <div style="text-align:center">
            Helmet
            <img style="width:10%; margin-right:55px; margin-bottom:5px;" src="{helmId}" alt="Helmet"/>
        </div>
        <div style="text-align:center">
            Chest
            <img style="width:10%; margin-right:45px; margin-bottom:5px;" src="{chestId}" alt="Chest"/>
        </div>
        <div style="text-align:center">
            Primary
            <img style="width:10%; margin-bottom:5px;" src="{primaryId}" alt="Primary"/>
            Secondary
            <img style="width:10%; margin-bottom:5px;" src="{secondaryId}" alt="Secondary"/>
        </div>
    </div>

    <div class="col-lg-4" style="text-align:center">
        <h2>
            {name}
        </h2>
        <div style="border-style:solid; border-width:3px;">
            <div>
                <h4>Damage: {damageStat}</h4>
            </div>
             <div>
                <h4>Protection: {protectionStat}</h4>
            </div>
             <div>
                <h4>Weight: {weightStat}</h4>
            </div>
        </div>
    </div>
</div>