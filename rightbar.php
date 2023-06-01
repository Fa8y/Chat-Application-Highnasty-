 <div class="app-right">
    <div class="app-profile-box">
      <img src="photo/<?php echo $row['image']; ?>">
      <p class="app-profile-box-title name"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg><?php echo $row['firstname']; ?>&nbsp;<?php echo $row['lastname']; ?></p>
      </a>
    </div>
    <div class="app-activity-box">
      <div class="activity-info-boxes">
        <div class="activity-info-box time">
          
        
          
          <div class="info-text-wrapper">
            <a href="#" class="info-text-center" style="color: white; text-align: center;">
            <i class="fas fa-image" style="margin-right: 5px;"></i> Images
            </a>
          </div>
        </div>
        <div class="activity-info-box reject">
          
          
            <a href="#" class="info-text-center" style="color: white; text-align: center;">
            <i class="fas fa-file" style="margin-right: 5px;"></i> Files
            </a>
          </div>
        </div>
      </div>
      <a href="\Websites\Scheduling\index.php" style="display: inline-block; text-align: center; border: 2px solid #ce962e; border-radius: 10px; background-color: #ce962e; color: white; padding: 10px; margin-top: 10px;">Schedule</a>
      <a href="\Websites\To-Do\index.php" style="display: inline-block; text-align: center; border: 2px solid #ce962e; border-radius: 10px; background-color: #ce962e; color: white; padding: 10px; margin-top: 10px;">To Do</a>
      </div>
    
  <div class="app-right-bottom">
      <div class="app-theme-selector">
      <button class="theme-color pink" data-color="pink" title="Light">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" >
          <defs/>
          <path fill="#fff" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
      <button class="theme-color dark" data-color="dark" title="Dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
          <defs/>
          <path fill="currentColor" d="M451.648.356c-25.777 2.712-56.79 19.872-94.811 52.46-68.786 58.958-149.927 160.756-202.185 234-38.158-5.951-78.375 10.368-102.187 40.133C8.758 381.584 45.347 430.34 4.12 473.811c-7.179 7.569-4.618 20.005 4.98 24.114 67.447 28.876 153.664 10.879 194.109-31.768 24.718-26.063 38.167-64.54 31.411-100.762 72.281-55.462 172.147-140.956 228.7-211.885 31.316-39.277 47.208-70.872 48.584-96.59C513.759 22.273 486.87-3.346 451.648.356zM181.443 445.511c-27.362 28.85-87.899 45.654-141.767 31.287 30.12-48.043 4.229-91.124 36.214-131.106 26.246-32.808 79.034-41.993 109.709-11.317 35.839 35.843 19.145 86.566-4.156 111.136zm3.07-148.841c7.354-10.167 18.887-25.865 33.29-44.659l49.22 49.224c-18.125 14.906-33.263 26.86-43.077 34.494-8.842-15.879-22.526-30.108-39.433-39.059zM481.948 55.316c-3.368 63.004-143.842 186.021-191.797 226.621l-53.785-53.79c39.458-49.96 155.261-191.312 218.422-197.954 16.851-1.775 28.03 8.858 27.16 25.123z"/>
        </svg>
      </button>
    </div>
    </div>
</div>
<!-- partial -->
  <script  src="js/land.js"></script>
 