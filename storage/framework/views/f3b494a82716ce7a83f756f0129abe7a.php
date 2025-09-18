
<?php $__env->startSection('content'); ?>


<div class="weather-card bg-white shadow-md rounded-2xl p-6 flex flex-col justify-between">
            <div class="weather-header mb-4">
                <div class="weather-title text-lg font-bold mb-2">
                    Weather in <span class="text-blue-600"><?php echo e($city); ?></span>
                </div>

                <?php if(isset($meteo['error'])): ?>
                    <div class="text-red-500 font-semibold"><?php echo e($meteo['error']); ?></div>
                <?php else: ?>
                    <div class="flex items-center mb-2">
                        <i class="weather-icon bi <?php echo e($meteo['icon_class']); ?> text-4xl text-yellow-400 mr-3"
                           aria-label="<?php echo e($meteo['weather'][0]['description'] ?? 'Weather icon'); ?>"></i>
                        <span class="weather-desc capitalize text-gray-700 text-lg">
                            <?php echo e($meteo['weather'][0]['description'] ?? 'N/A'); ?>

                        </span>
                    </div>

                    <ul class="weather-list text-gray-600 space-y-1">
                        <li><span class="font-semibold">Temperature:</span> <?php echo e($meteo['main']['temp'] ?? 'N/A'); ?> °C</li>
                        <li><span class="font-semibold">Feels like:</span> <?php echo e($meteo['main']['feels_like'] ?? 'N/A'); ?> °C</li>
                        <li><span class="font-semibold">Pressure:</span> <?php echo e($meteo['main']['pressure'] ?? 'N/A'); ?> hPa</li>
                        <li><span class="font-semibold">Humidity:</span> <?php echo e($meteo['main']['humidity'] ?? 'N/A'); ?> %</li>
                        <li>
                            <span class="font-semibold">Wind:</span>
                            <?php if(isset($meteo['wind']['speed'])): ?>
                                <?php echo e(number_format($meteo['wind']['speed'] * 3.6, 1)); ?> km/h
                                <?php if(isset($meteo['wind_dir'])): ?>
                                    • <?php echo e($meteo['wind_dir']); ?>

                                <?php endif; ?>
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>


        <?php $__env->stopSection(); ?>
<?php echo $__env->make('./layouts/app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\work\Laravel\weatherapp\resources\views/search.blade.php ENDPATH**/ ?>