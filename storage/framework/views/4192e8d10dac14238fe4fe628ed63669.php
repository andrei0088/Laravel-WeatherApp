

<?php $__env->startSection('content'); ?>

<section class="contact-wrapper py-6 bg-gray-100 flex items-center justify-center">
    <div class="contact-card bg-white shadow-lg rounded-2xl max-w-3xl p-8 md:p-12">
        <h2 class="contact-title text-3xl md:text-4xl font-bold text-gray-800 mb-6 text-center">
            Contact
        </h2>

        <p class="contact-text text-gray-700 text-base md:text-lg mb-4">
            If you have any questions, suggestions, or feedback about WeatherApp, feel free to reach out!
        </p>

        <p class="contact-text text-gray-700 text-base md:text-lg">
            You can contact me directly at:<br />
            <a href="mailto:andreidavidoiu@gmail.com" class="text-blue-600 hover:underline">
                andreidavidoiu@gmail.com
            </a>
        </p>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('./layouts/app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\Laravel\weatherapp\resources\views/contact.blade.php ENDPATH**/ ?>