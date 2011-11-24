<% if Elements %>
    <div>
        <h2>$WidgetTitle</h2>
    </div>

    <% if isContentView %>
        <% if useListView %>
            <% include SilvercartProductGroupPageList %>
        <% else %>
            <% include SilvercartProductGroupPageTile %>
        <% end_if %>
    <% else %>
        <% if useListView %>
            <% include SilvercartWidgetProductBoxList %>
        <% else %>
            <% include SilvercartWidgetProductBoxTile %>
        <% end_if %>
    <% end_if %>
<% end_if %>