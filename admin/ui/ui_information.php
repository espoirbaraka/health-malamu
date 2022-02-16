<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700
              dark:text-gray-200">
      Information de l'entreprise
    </h2>
    <?php
                                if(isset($_SESSION['success'])){
                                echo "
                                <a
              class='flex items-center justify-between p-4 mb-8 text-sm
              font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md
              focus:outline-none focus:shadow-outline-purple'>
              <div class='flex items-center'>
                <svg
                  class='w-5 h-5 mr-2'
                  fill='currentColor'
                  viewBox='0 0 20 20'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                    00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0
                    00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54
                    1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8
                    2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0
                    00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1
                    1 0 00.951-.69l1.07-3.292z'></path>
                </svg>
                <span>".$_SESSION['success']."</span>
              </div>
            </a>
                                ";
                                unset($_SESSION['success']);
                                }
                                if(isset($_SESSION['error'])){
                                echo "
                                <a
                                class='flex items-center justify-between p-4 mb-8 text-sm
                                font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md
                                focus:outline-none focus:shadow-outline-purple'>
                                <div class='flex items-center'>
                                  <svg
                                    class='w-5 h-5 mr-2'
                                    fill='currentColor'
                                    viewBox='0 0 20 20'>
                                    <path
                                      d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                                      00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0
                                      00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54
                                      1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8
                                      2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0
                                      00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1
                                      1 0 00.951-.69l1.07-3.292z'></path>
                                  </svg>
                                  <span>".$_SESSION['error']."</span>
                                </div>
                              </a>
                                ";
                                unset($_SESSION['error']);
                                }
                            ?>
    <?php
    $requette = 'SELECT * FROM t_information WHERE CodeInformation=1';
    $information = $app->fetch($requette);
    //foreach ($information as $row) {
    ?>
      <form action="manager/update.php" method="POST" enctype="multipart/form-data">
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md
              dark:bg-gray-800">
              <input type="hidden" name="event" value="UPDATE_INFORMATION">
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nom de l'entreprise</span>
            <input name="nom" value="<?php echo $information['DesignationAPK'] ?>" class="block w-full mt-1 text-sm dark:border-gray-600
                  dark:bg-gray-700 focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:text-gray-300
                  dark:focus:shadow-outline-gray form-input" />
          </label>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Abbreviation</span>
            <input name="abbreviation" value="<?php echo $information['Abbreviation'] ?>" class="block w-full mt-1 text-sm dark:border-gray-600
                  dark:bg-gray-700 focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:text-gray-300
                  dark:focus:shadow-outline-gray form-input" />
          </label>

          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Presentation de l'entreprise</span>
            <textarea name="presentation" class="block w-full mt-1 text-sm dark:text-gray-300
                  dark:border-gray-600 dark:bg-gray-700 form-textarea
                  focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" ><?php echo $information['Presentation'] ?></textarea>
          </label>


          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Objectif de l'entreprise</span>
            <textarea name="objectif" class="block w-full mt-1 text-sm dark:text-gray-300
                  dark:border-gray-600 dark:bg-gray-700 form-textarea
                  focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" ><?php echo $information['Objectif'] ?></textarea>
          </label>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Telephone</span>
            <input name="telephone" value="<?php echo $information['Telephone'] ?>" class="block w-full mt-1 text-sm dark:border-gray-600
                  dark:bg-gray-700 focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:text-gray-300
                  dark:focus:shadow-outline-gray form-input" type="tel" />
          </label>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email</span>
            <input name="email" value="<?php echo $information['Email'] ?>" class="block w-full mt-1 text-sm dark:border-gray-600
                  dark:bg-gray-700 focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:text-gray-300
                  dark:focus:shadow-outline-gray form-input" type="email" />
          </label>

          <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Adresse de l'entreprise</span>
            <textarea name="adresse" class="block w-full mt-1 text-sm dark:text-gray-300
                  dark:border-gray-600 dark:bg-gray-700 form-textarea
                  focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" ><?php echo $information['Adresse'] ?></textarea>
          </label>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Lien video youtube</span>
            <input name="video" value="<?php echo $information['VideoYoutube'] ?>" class="block w-full mt-1 text-sm dark:border-gray-600
                  dark:bg-gray-700 focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:text-gray-300
                  dark:focus:shadow-outline-gray form-input" />
          </label>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Logo</span>
            <input class="block w-full mt-1 text-sm dark:border-gray-600
                  dark:bg-gray-700 focus:border-purple-400 focus:outline-none
                  focus:shadow-outline-purple dark:text-gray-300
                  dark:focus:shadow-outline-gray form-input" type="file" name="avatar" />
          </label>

          <input type="submit" name="update" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Mettre à jour">


        </div>
      </form>
    <?php
    //}
    ?>





  </div>
</main>
</div>
</div>
</body>

<!-- Mirrored from windmill-dashboard.vercel.app/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jul 2021 09:52:02 GMT -->

</html>