use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reg_no');
            $table->string('pay_for', 100);
            $table->tinyInteger('status')->default(2)->comment('0: Failed, 1: Done, 2: Pending');
            $table->string('status_str', 50)->nullable();
            $table->string('status_cat_str', 100)->nullable();
            $table->string('txnid', 255);
            $table->double('gst_amount')->nullable();
            $table->string('amount', 100);
            $table->string('commission_amt', 100)->nullable();
            $table->string('my_currency_rate', 50)->nullable();
            $table->string('sp_currency_rate', 50)->nullable();
            $table->longText('posted_data');
            $table->longText('responded_data');
            $table->string('txn_token', 255)->nullable();
            $table->dateTime('txn_token_expiry');
            $table->softDeletes(); // deleted_at
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_transactions');
    }
}
