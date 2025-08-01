                     <form action="insert_campaign.php" method="post">
      
      <div class="mb-3">
        <label for="campaign_name" class="form-label">Campaign Name</label>
        <input type="text" class="form-control" id="campaign_name" name="campaign_name" required>
      </div>

      <div class="mb-3">
        <label for="report_date" class="form-label">Report Date</label>
        <input type="date" class="form-control" id="report_date" name="report_date" required>
      </div>

      <div class="mb-3">
        <label for="impressions" class="form-label">Impressions</label>
        <input type="number" class="form-control" id="impressions" name="impressions" required>
      </div>

      <div class="mb-3">
        <label for="clicks" class="form-label">Clicks</label>
        <input type="number" class="form-control" id="clicks" name="clicks" required>
      </div>

      <div class="mb-3">
        <label for="conversions" class="form-label">Conversions</label>
        <input type="number" class="form-control" id="conversions" name="conversions">
      </div>

      <div class="mb-3">
        <label for="cost" class="form-label">Total Cost ($)</label>
        <input type="number" step="0.01" class="form-control" id="cost" name="cost" required>
      </div>

      <div class="mb-3">
        <label for="notes" class="form-label">Notes</label>
        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit Report</button>
    </form>