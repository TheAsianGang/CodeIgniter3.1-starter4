<div>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Sets
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        {sets}
            <li><a href="/Welcome/set/{id}"> {name}</a></li>
        {/sets}
      </ul>
    </div>
    
    <div class="imgParent">
        <img class="modelImg" src="/assets/img/model.png" />
        <img class="helmImg" src="{helmId}" alt="Helmet"/>
        <img class="chestImg" src="{chestId}" alt="Chest"/>
        <img class="primaryImg" src="{primaryId}" alt="Primary"/>
        <img class="secondaryImg" src="{secondaryId}" alt="Secondary"/>
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