<script id="hrjob-role-table-template" type="text/template">
  <h3>{ts}Roles{/ts}</h3>

  <table class="hrjob-role-table">
    <thead>
    <tr>
      <th style="width: 2em;"></th>
      <th>{ts}Role Description{/ts}</th>
      <th style="width: 5em;">{ts}Hours{/ts}</th>
      <th style="width: 5em;">{ts}Action{/ts}</th>
    </tr>
    </thead>
    <tbody>
      <tr class="hrjob-role-final">
        <td></td>
        <td><a href="#" class="hrjob-role-add">{ts}Add role{/ts}</a></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

  <%= RenderUtil.standardButtons() %>
</script>
